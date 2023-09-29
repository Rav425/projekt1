<?php

class Categories_Op {

    public $c_id;
    public $c_title;
    public $c_image;
    public $c_statue;

    public function init_catById($id){
        global $con;
        if($id >= 1){
            $s = $con->prepare("SELECT c_title,c_image,c_statue FROM categories WHERE c_id=?");
            $s->bind_param('i', $id);
            $s->execute();
            $s->store_result();
            $s->bind_result($this->c_title, $this->c_image, $this->c_statue);
            if($s->num_rows()){
                $s->fetch();
            }
        }
    }
    
    public function checktitle($title, $id = 0){
        global $con;
        if(!empty($title)){
			$stmt = $con->prepare("SELECT c_id FROM categories WHERE c_title=? AND c_id!=?");
			$stmt->bind_param('si', $title, $id);
			$stmt->execute();
			$stmt->store_result();
			if($stmt->num_rows >= 1){
				return 1;
			}
		}
    }

    public function new_category($data_arr){
        global $con;

        $decoded = JWT::decode($data_arr);
        $c_title = $decoded->c_title;
        $c_image = $decoded->c_image;
        $c_statue = $decoded->c_statue;
        
        if($this->checktitle($c_title) != 1){
            if(!empty($c_image)){
                $defaultImage = "../../requests/categories/thumbs/temp/" . $c_image;
                $uploadedImage = "../../requests/categories/thumbs/" . $c_image;
                copy($defaultImage, $uploadedImage);
            }
            $directory = '../../requests/categories/thumbs/temp/';
            $files = array();
            foreach (scandir($directory) as $file) {
                if ($file !== '.' && $file !== '..') {
                    $files[] = $file;
                    $image = realpath($directory) . "/" . $file;
                    @unlink($image);
                }
            }
            
            $s = $con->prepare("INSERT INTO categories (c_title,c_image,c_statue) VALUES (?,?,?)");
            $s->bind_param('ssi', $c_title, $c_image, $c_statue);
            if($s->execute()){
                return 1;
            }
            else {
                return $con->error;
            }
        }
    }

    public function req_oldCatJsonId($id_arr){
        $decoded = JWT::decode($id_arr);
        $cat_id = $decoded->cat_id;
        if($cat_id >= 1){
            $this->init_catById($cat_id);
            $postdata = array(
                'c_title' => $this->c_title,
                'c_image' => $this->c_image,
                'c_statue' => $this->c_statue
            );
            return json_encode($postdata);
        }
    }

    public function update_category($data_arr){
        global $con;
        $decoded = JWT::decode($data_arr);
        $cat_id = $decoded->cat_id;
        $c_image = $decoded->c_image;
        $c_title = $decoded->c_title;
        $c_statue = $decoded->c_statue;
        if($cat_id >= 1){
            $this->init_catById($cat_id);
            if(!empty($c_image) && $this->c_image != $c_image){
            	$defaultImage = "../../requests/categories/thumbs/temp/" . $c_image;
            	$uploadedImage = "../../requests/categories/thumbs/" . $c_image;
            	@copy($defaultImage, $uploadedImage);
				$directory = '../../requests/categories/thumbs/temp/';
				$files = array();
				foreach (scandir($directory) as $file) {
					if ($file !== '.' && $file !== '..') {
						$files[] = $file;
						$image = realpath($directory) . "/" . $file;
						@unlink($image);
					}
				}
            }
            $s = $con->prepare("UPDATE categories SET c_title=?,c_image=?,c_statue=? WHERE c_id=?");
            $s->bind_param('ssii', $c_title, $c_image, $c_statue, $cat_id);
            if($s->execute()){
                return 1;
            }
            else {
                return $con->error;
            }
        }
    }

    public function delete_category($id_arr){
        global $con;
        $decoded = JWT::decode($id_arr);
        $cat_id = $decoded->cat_id;
        if($cat_id >= 1){
            $this->init_catById($cat_id);
            if(!empty($this->c_image)){
				$directory = '../../requests/categories/thumbs/';
				$image = realpath($directory) . "/" . $this->c_image;
				unlink($image);
            }
            $s = $con->prepare("DELETE FROM categories WHERE c_id=?");
            $s->bind_param('i', $cat_id);
            if($s->execute()){
                return 1;
            }
            else {
                return $con->error;
            }
        }
    }

    public function get_cats(){
        global $con;
        $s = $con->prepare("SELECT c_id,c_title,c_image FROM categories WHERE c_statue=1");
        $s->execute();
        $s->store_result();
        $s->bind_result($c_id, $c_title, $c_image);
        if($s->num_rows >= 1){
            while($s->fetch()){
                if(!empty($c_image)){
                    $c_image = 'system/requests/categories/thumbs/' . $c_image;
                }
                echo '
                    <div class="col text-center btn-bg-none cursor-pointer nav-link">
                        <div class="symbol mx-auto d-flex w-50px h-50px bgi-no-repeat bgi-size-contain bgi-position-center">
                            <span class="svg-icon svg-icon-gray-700 svg-icon-3hx">
                                <img src="'.$c_image.'" class="w-50px h-50px">
                            </span>
                        </div>
                        <a href="#" cid="'.$c_id.'" class="text-gray-500 fs-6 fw-bold text-hover-primary filter_items">'.$c_title.'</a>
                    </div>
                ';
            }
        }
    }

    public function select_category(){
        global $con;
        $s = $con->prepare("SELECT c_id,c_title FROM categories WHERE c_statue=1");
        $s->execute();
        $s->store_result();
        $s->bind_result($c_id, $c_title);
        if($s->num_rows >= 1){
            while($s->fetch()){
                echo '
                    <option value="'.$c_id.'">'.$c_title.'</option>
                ';
            }
        }
        else {
            echo '
                <option value="0">No Category</option>
            ';
        }
    }
}

$init_categories = new Categories_Op();
?>