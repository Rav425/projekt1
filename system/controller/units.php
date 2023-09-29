<?php
class Units_Op {

    public $u_id;
    public $u_user_id;
    public $u_title;
    public $u_country;
    public $u_city;
    public $u_address;
    public $u_images;
    public $u_host_count;
    public $u_room_count;
    public $u_path_count;
    public $u_description;
    public $u_wifi;
    public $u_garden;
    public $u_kitchen;
    public $u_tv;
    public $u_workspace;
    public $u_parking;
    public $u_pool;
    public $u_washer;
    public $u_air_conditioning;
    public $u_fans;
    public $u_refrigerator;
    public $u_one_night_cost;
    public $u_added_cost;
    public $u_category;
    public $u_create_at;
    
    public function init_UnitById($id){
        global $con;
        if($id >= 1){
            $s = $con->prepare("SELECT u_user_id,u_title,u_country,u_city,u_address,u_images,u_host_count,u_room_count,u_path_count,u_description,u_wifi,u_garden,u_kitchen,u_tv,u_workspace,u_parking,u_pool,u_washer,u_air_conditioning,u_fans,u_refrigerator,u_one_night_cost,u_added_cost,u_category,u_create_at FROM units WHERE u_id=?");
            $s->bind_param('i', $id);
            $s->execute();
            $s->store_result();
            $s->bind_result($this->u_user_id, $this->u_title, $this->u_country, $this->u_city, $this->u_address, $this->u_images, $this->u_host_count, $this->u_room_count, $this->u_path_count, $this->u_description, $this->u_wifi, $this->u_garden, $this->u_kitchen, $this->u_tv, $this->u_workspace, $this->u_parking, $this->u_pool, $this->u_washer, $this->u_air_conditioning, $this->u_fans, $this->u_refrigerator, $this->u_one_night_cost, $this->u_added_cost, $this->u_category, $this->u_create_at);
            if($s->num_rows >= 1){
                $s->fetch();
            }
        }
    }

    public function new_unit($data_arr){
        global $con;
        global $init_users;
		global $get_time;

        $getSessio = $_SESSION['UserLoginState'];
        $decode_Login = JWT::decode($getSessio, $init_users->SesKey);
        $user_id = $decode_Login->userLoginId;

        $decoded = JWT::decode($data_arr);

        $u_images = $decoded->u_images;
        $u_title = $decoded->u_title;
        $u_country = $decoded->u_country;
        $u_city = $decoded->u_city;
        $u_address = $decoded->u_address;
        $u_host_count = $decoded->u_host_count;
        $u_room_count = $decoded->u_room_count;
        $u_path_count = $decoded->u_path_count;
        $u_description = $decoded->u_description;
        $u_wifi = $decoded->u_wifi;
        $u_kitchen = $decoded->u_kitchen;
        $u_garden = $decoded->u_garden;
        $u_workspace = $decoded->u_workspace;
        $u_tv = $decoded->u_tv;
        $u_parking = $decoded->u_parking;
        $u_pool = $decoded->u_pool;
        $u_fans = $decoded->u_fans;
        $u_washer = $decoded->u_washer;
        $u_refrigerator = $decoded->u_refrigerator;
        $u_air_conditioning = $decoded->u_air_conditioning;
        $u_one_night_cost = $decoded->u_one_night_cost;
        $u_added_cost = $decoded->u_added_cost;
        $u_cat = $decoded->u_cat;
        
		if(!empty($u_images)){
        	$img_arr = explode(',', $u_images);
        	for($i=0;$i<count($img_arr);$i++){
				$image_name = $img_arr[$i];
				if(!empty($image_name)){
					$defaultImage = "../../requests/units/thumbs/temp/" . $image_name;
					$uploadedImage = "../../requests/units/thumbs/" . $image_name;
					copy($defaultImage, $uploadedImage);
				}
			}
			$directory = '../../requests/units/thumbs/temp/';
			$files = array();
			foreach (scandir($directory) as $file) {
				if ($file !== '.' && $file !== '..') {
					$files[] = $file;
					$image = realpath($directory) . "/" . $file;
					@unlink($image);
				}
			}
		}

        $s = $con->prepare("INSERT INTO units (u_user_id,u_title,u_country,u_city,u_address,u_images,u_host_count,u_room_count,u_path_count,u_description,u_wifi,u_garden,u_kitchen,u_tv,u_workspace,u_parking,u_pool,u_washer,u_air_conditioning,u_fans,u_refrigerator,u_one_night_cost,u_added_cost,u_category,u_create_at) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $s->bind_param('isssssiiisiiiiiiiiiiiddis', $user_id, $u_title, $u_country, $u_city, $u_address, $u_images, $u_host_count, $u_room_count, $u_path_count, $u_description, $u_wifi, $u_garden, $u_kitchen, $u_tv, $u_workspace, $u_parking, $u_pool, $u_washer, $u_air_conditioning, $u_fans, $u_refrigerator, $u_one_night_cost, $u_added_cost, $u_cat, $get_time);
        if($s->execute()){
            return 1;
        }
        else {
            return $con->error;
        }
    }

    public function my_unit_count(){
        global $con;
        global $init_users;

        $getSessio = $_SESSION['UserLoginState'];
        $decode_Login = JWT::decode($getSessio, $init_users->SesKey);
        $user_id = $decode_Login->userLoginId;

        $s = $con->prepare("SELECT u_id FROM units WHERE u_user_id=?");
        $s->bind_param('i', $user_id);
        $s->execute();
        $s->store_result();
        if($s->num_rows >= 1){
            return $s->num_rows;
        }
        else {
            return 0;
        }
    }

    public function req_unitImagesById($id){
        if($id >= 1){
            $this->init_UnitById($id);
			$image_table = '';
			$img_arrs = explode(',', $this->u_images);
			for($s=0;$s<count($img_arrs);$s++){
				if(!empty($img_arrs[$s]) && strlen($img_arrs[$s]) >= 5){
					$image_table .= '
						<tr>
							<td>'.$img_arrs[$s].'</td>
							<td><img src="system/requests/units/thumbs/'.$img_arrs[$s].'"></td>
							<td>
								<a target="_blank" href="system/requests/units/thumbs/'.$img_arrs[$s].'" class="btn btn-icon btn-primary m-1 btn-sm" title="View">
									<span class="svg-icon svg-icon-muted svg-icon-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M17 6H3C2.4 6 2 6.4 2 7V21C2 21.6 2.4 22 3 22H17C17.6 22 18 21.6 18 21V7C18 6.4 17.6 6 17 6Z" fill="currentColor"/>
                                        <path d="M17.8 4.79999L9.3 13.3C8.9 13.7 8.9 14.3 9.3 14.7C9.5 14.9 9.80001 15 10 15C10.2 15 10.5 14.9 10.7 14.7L19.2 6.20001L17.8 4.79999Z" fill="currentColor"/>
                                        <path opacity="0.3" d="M22 9.09998V3C22 2.4 21.6 2 21 2H14.9L22 9.09998Z" fill="currentColor"/>
                                        </svg>
									</span>
								</a>
								<a href="#" iname="'.$img_arrs[$s].'" class="btn btn-icon btn-danger m-1 btn-sm deleteimg" title="Delete">
									<span class="svg-icon svg-icon-muted svg-icon-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"/>
											<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"/>
											<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
										</svg>
									</span>
								</a>
							</td>
						</tr>
					';
				}
			}
            return $image_table;
        }
    }

    public function req_CpunitImagesById($id){
        if($id >= 1){
            $this->init_UnitById($id);
			$image_table = '';
			$img_arrs = explode(',', $this->u_images);
			for($s=0;$s<count($img_arrs);$s++){
				if(!empty($img_arrs[$s]) && strlen($img_arrs[$s]) >= 5){
					$image_table .= '
						<tr>
							<td>'.$img_arrs[$s].'</td>
							<td><img style="width: 60px;" src="../system/requests/units/thumbs/'.$img_arrs[$s].'"></td>
							<td>
								<a target="_blank" href="../system/requests/units/thumbs/'.$img_arrs[$s].'" class="btn btn-icon btn-primary m-1 btn-sm" title="View">
									<span class="svg-icon svg-icon-muted svg-icon-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M17 6H3C2.4 6 2 6.4 2 7V21C2 21.6 2.4 22 3 22H17C17.6 22 18 21.6 18 21V7C18 6.4 17.6 6 17 6Z" fill="currentColor"/>
                                        <path d="M17.8 4.79999L9.3 13.3C8.9 13.7 8.9 14.3 9.3 14.7C9.5 14.9 9.80001 15 10 15C10.2 15 10.5 14.9 10.7 14.7L19.2 6.20001L17.8 4.79999Z" fill="currentColor"/>
                                        <path opacity="0.3" d="M22 9.09998V3C22 2.4 21.6 2 21 2H14.9L22 9.09998Z" fill="currentColor"/>
                                        </svg>
									</span>
								</a>
								<a href="#" iname="'.$img_arrs[$s].'" class="btn btn-icon btn-danger m-1 btn-sm deleteimg" title="Delete">
									<span class="svg-icon svg-icon-muted svg-icon-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"/>
											<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"/>
											<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
										</svg>
									</span>
								</a>
							</td>
						</tr>
					';
				}
			}
            return $image_table;
        }
    }

    public function req_unitJsonId($id, $u_admin = 0){
        global $init_categories;
        if($id >= 1){
            $this->init_UnitById($id);
            if($u_admin == 1){
                $images = $this->req_CpunitImagesById($id);
            }
            else {
                $images = $this->req_unitImagesById($id);
            }
            $images = '';
			$img_arrs = explode(',', $this->u_images);
            $images .= '
                <div class="col-lg-6 px-0 mb-5">
                    <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="system/requests/units/thumbs/'.$img_arrs[0].'">
                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url(system/requests/units/thumbs/'.$img_arrs[0].')"></div>
                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                            <i class="bi bi-eye-fill fs-3x text-white"></i>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-6">
                    <div class="row g-10 mb-5">
                        <div class="col-lg-6 pe-0">
                            <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="system/requests/units/thumbs/'.$img_arrs[1].'">
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url(system/requests/units/thumbs/'.$img_arrs[1].')"></div>
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="bi bi-eye-fill fs-3x text-white"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 pe-0">
                            <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="system/requests/units/thumbs/'.$img_arrs[2].'">
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url(system/requests/units/thumbs/'.$img_arrs[2].')"></div>
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="bi bi-eye-fill fs-3x text-white"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row g-10 mb-5">
                        <div class="col-lg-6 pe-0">
                            <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="system/requests/units/thumbs/'.$img_arrs[3].'">
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url(system/requests/units/thumbs/'.$img_arrs[3].')"></div>
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="bi bi-eye-fill fs-3x text-white"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 pe-0">
                            <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="system/requests/units/thumbs/'.$img_arrs[4].'">
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url(system/requests/units/thumbs/'.$img_arrs[4].')"></div>
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="bi bi-eye-fill fs-3x text-white"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            ';
            
            $init_categories->init_catById($this->u_category);
            $postdata = array(
                'u_title' => $this->u_title,
                'u_country' => $this->u_country,
                'u_city' => $this->u_city,
                'u_address' => $this->u_address,
                'u_images' => $this->u_images,
                'u_host_count' => $this->u_host_count,
                'u_room_count' => $this->u_room_count,
                'u_path_count' => $this->u_path_count,
                'u_description' => $this->u_description,
                'u_wifi' => $this->u_wifi,
                'u_garden' => $this->u_garden,
                'u_kitchen' => $this->u_kitchen,
                'u_tv' => $this->u_tv,
                'u_workspace' => $this->u_workspace,
                'u_parking' => $this->u_parking,
                'u_pool' => $this->u_pool,
                'u_washer' => $this->u_washer,
                'u_air_conditioning' => $this->u_air_conditioning,
                'u_fans' => $this->u_fans,
                'u_refrigerator' => $this->u_refrigerator,
                'u_one_night_cost' => $this->u_one_night_cost,
                'u_added_cost' => $this->u_added_cost,
                'images_table' => $images,
                'u_category' => $this->u_category,
                'u_catname' => $init_categories->c_title,
                'u_images_row' => $images,
                'u_first_image' => $img_arrs[0],
            );
            return json_encode($postdata);
        }
    }

    public function delete_unit_image($data_arr){
        global $con;
        $decoded = JWT::decode($data_arr);
        $image_name = $decoded->image_name;
        $unit_id = $decoded->unit_id;
		if(!empty($image_name) && $unit_id >= 1){
            $this->init_UnitById($unit_id);
			$all_images = $this->u_images;
			$final_value = '';
			$imgs_arr = explode(',', $all_images);
			if($key = array_search($image_name, $imgs_arr) !== false){
				unset($imgs_arr[$key+1]);
			}
			for($i=0;$i<count($imgs_arr);$i++){
				if(!empty($imgs_arr[$i])){
					$final_value .= $imgs_arr[$i] . ',';
				}
			}
            $s = $con->prepare("UPDATE units SET u_images=? WHERE u_id=?");
            $s->bind_param('si', $final_value, $unit_id);
			if($s->execute()){
				$directory = '../../requests/units/thumbs/';
				$image = realpath($directory) . "/" . $image_name;
				unlink($image);
				return 1;
			}
			else {
				return $con->error;
			}
        }
    }

    public function update_unit($data_arr){
        global $con;
		global $get_time;

        $decoded = JWT::decode($data_arr);

        $u_id = $decoded->u_id;
        $u_images = $decoded->u_images;
        $u_title = $decoded->u_title;
        $u_country = $decoded->u_country;
        $u_city = $decoded->u_city;
        $u_address = $decoded->u_address;
        $u_host_count = $decoded->u_host_count;
        $u_room_count = $decoded->u_room_count;
        $u_path_count = $decoded->u_path_count;
        $u_description = $decoded->u_description;
        $u_wifi = $decoded->u_wifi;
        $u_kitchen = $decoded->u_kitchen;
        $u_garden = $decoded->u_garden;
        $u_workspace = $decoded->u_workspace;
        $u_tv = $decoded->u_tv;
        $u_parking = $decoded->u_parking;
        $u_pool = $decoded->u_pool;
        $u_fans = $decoded->u_fans;
        $u_washer = $decoded->u_washer;
        $u_refrigerator = $decoded->u_refrigerator;
        $u_air_conditioning = $decoded->u_air_conditioning;
        $u_one_night_cost = $decoded->u_one_night_cost;
        $u_added_cost = $decoded->u_added_cost;
        $u_cat = $decoded->u_cat;

        $this->init_UnitById($u_id);
		if(!empty($u_images) && $u_images != $this->u_images){
        	$img_arr = explode(',', $u_images);
        	for($i=0;$i<count($img_arr);$i++){
				$image_name = $img_arr[$i];
				if(!empty($image_name)){
					$defaultImage = "../../requests/units/thumbs/temp/" . $image_name;
					$uploadedImage = "../../requests/units/thumbs/" . $image_name;
					copy($defaultImage, $uploadedImage);
				}
			}
			$directory = '../../requests/units/thumbs/temp/';
			$files = array();
			foreach (scandir($directory) as $file) {
				if ($file !== '.' && $file !== '..') {
					$files[] = $file;
					$image = realpath($directory) . "/" . $file;
					@unlink($image);
				}
			}
        }
        $final_images = $this->u_images . $u_images;
        $s = $con->prepare("UPDATE units SET u_title=?,u_country=?,u_city=?,u_address=?,u_images=?,u_host_count=?,u_room_count=?,u_path_count=?,u_description=?,u_wifi=?,u_garden=?,u_kitchen=?,u_tv=?,u_workspace=?,u_parking=?,u_pool=?,u_washer=?,u_air_conditioning=?,u_fans=?,u_refrigerator=?,u_one_night_cost=?,u_added_cost=?,u_category=?,u_create_at=? WHERE u_id=?");
        $s->bind_param('sssssiiisiiiiiiiiiiiddisi', $u_title, $u_country, $u_city, $u_address, $final_images, $u_host_count, $u_room_count, $u_path_count, $u_description, $u_wifi, $u_garden, $u_kitchen, $u_tv, $u_workspace, $u_parking, $u_pool, $u_washer, $u_air_conditioning, $u_fans, $u_refrigerator, $u_one_night_cost, $u_added_cost, $u_cat, $get_time, $u_id);
        if($s->execute()){
            return 1;
        }
        else {
            return $con->error;
        }
    }

    public function delete_unit($id_arr){
        global $con;
        $decoded = JWT::decode($id_arr);
        $u_id = $decoded->u_id;
        if($u_id >= 1){
            $this->init_UnitById($u_id);
			$all_images = $this->u_images;
			$imgs_arr = explode(',', $all_images);
			for($i=0;$i<count($imgs_arr);$i++){
				if(!empty($imgs_arr[$i])){
				    $directory = '../../requests/units/thumbs/';
                    $image = realpath($directory) . "/" . $imgs_arr[$i];
                    unlink($image);
                }
            }
            $s = $con->prepare("DELETE FROM units WHERE u_id=?");
            $s->bind_param('i', $u_id);
            if($s->execute()){
                return 1;
            }
            else {
                return $con->error;
            }
        }
    }

    public function logged_units_count(){
        global $con;
        global $init_users;

        $getSessio = $_SESSION['UserLoginState'];
        $decode_Login = JWT::decode($getSessio, $init_users->SesKey);
        $user_id = $decode_Login->userLoginId;
        if($user_id >= 1){
            $s = $con->prepare("SELECT u_id FROM units WHERE u_user_id=?");
            $s->bind_param('i', $user_id);
            $s->execute();
            $s->store_result();
            return $s->num_rows;
        }
    }

    public function logged_reserves_count(){
        global $con;
        global $init_users;

        $getSessio = $_SESSION['UserLoginState'];
        $decode_Login = JWT::decode($getSessio, $init_users->SesKey);
        $user_id = $decode_Login->userLoginId;
        if($user_id >= 1){
            $s = $con->prepare("SELECT r_id FROM reservations WHERE r_user_id=?");
            $s->bind_param('i', $user_id);
            $s->execute();
            $s->store_result();
            return $s->num_rows;
        }
    }

    public function logged_likes_count(){
        global $con;
        global $init_users;

        $getSessio = $_SESSION['UserLoginState'];
        $decode_Login = JWT::decode($getSessio, $init_users->SesKey);
        $user_id = $decode_Login->userLoginId;
        if($user_id >= 1){
            $s = $con->prepare("SELECT l_id FROM likes WHERE l_user_id=?");
            $s->bind_param('i', $user_id);
            $s->execute();
            $s->store_result();
            return $s->num_rows;
        }
    }

    public function loop_all_unit(){
        global $con;
        $s = $con->prepare("SELECT u_id,u_title,u_description,u_one_night_cost,u_images FROM units WHERE u_statue=1 ORDER BY u_create_at DESC");
        $s->execute();
        $s->store_result();
        $s->bind_result($u_id, $u_title, $u_description, $u_one_night_cost, $u_images);
        if($s->num_rows >= 1){
            while($s->fetch()){
                echo '
                    <div class="col-md-2">
                        <div class="card-xl-stretch bg-white p-5 card-rounded">
                            <div id="kt_carousel_'.$u_id.'" class="carousel carousel-custom slide" data-bs-ride="carousel" data-bs-interval="3000">
                                <div class="carousel-inner mb-1">
                                ';
                                if(!empty($u_images)){
                                    $img_arr = explode(',', $u_images);
                                    echo '
                                        <div class="carousel-item active">
                                            <a target="_blank" class="d-block overlay" data-fslightbox="lightbox-hot-sales" target="_blank" href="?go=view_unit&id='.$u_id.'">
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url(system/requests/units/thumbs/'.$img_arr[0].')"></div>
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="bi bi-eye-fill fs-2x text-white"></i>
                                                </div>
                                            </a>
                                        </div>
                                    ';
                                    for($i=1; $i<count($img_arr); $i++){
                                        if(!empty($img_arr[$i])){
                                            echo '
                                                <div class="carousel-item">
                                                    <a target="_blank" class="d-block overlay" data-fslightbox="lightbox-hot-sales" target="_blank" href="?go=view_unit&id='.$u_id.'">
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url(system/requests/units/thumbs/'.$img_arr[$i].')"></div>
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            ';
                                        }
                                    }
                                }
                                echo '
                                </div>
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots overflow-hidden">
                                        <li data-bs-target="#kt_carousel_'.$u_id.'" data-bs-slide-to="1" class="ms-1 active"></li>
                                    ';
                                    for($i=2; $i<count($img_arr); $i++){
                                        if(!empty($img_arr[$i])){
                                            echo '
                                                <li data-bs-target="#kt_carousel_'.$u_id.'" data-bs-slide-to="'.$i.'" class="ms-1"></li>
                                            ';
                                        }
                                    }
                                    echo '
                                    </ol>
                                </div>
                            </div>
                            <div class="pt-1">
                                <a target="_blank" href="?go=view_unit&id='.$u_id.'" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base d-block min-h-50px">'.$u_title.'</a>
                                <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 min-h-50px">'.limit_text($u_description, 10).'</div>
                                <div class="fs-6 fw-bolder mt-5 d-flex flex-stack">
                                    <span class="badge border border-dashed fs-2 fw-bolder text-dark p-2">
                                        <span class="fs-6 fw-bold text-gray-400">$</span>'.$u_one_night_cost.'</span>
                                    <a target="_blank" href="?go=view_unit&id='.$u_id.'" class="btn btn-sm btn-primary">View Unit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
    }

    public function reserve_unit($data_arr){
        global $con;
        global $init_users;
		global $get_time;

        $getSessio = $_SESSION['UserLoginState'];
        $decode_Login = JWT::decode($getSessio, $init_users->SesKey);
        $user_id = $decode_Login->userLoginId;

        $decoded = JWT::decode($data_arr);

        $unit_id = $decoded->unit_id;
        $p_cardno = $decoded->p_cardno;
        $p_expdate = $decoded->p_expdate;
        $p_ccvno = $decoded->p_ccvno;
        $p_address = $decoded->p_address;
        $p_from = $decoded->p_from;
        $p_to = $decoded->p_to;
        $p_guests = $decoded->p_guests;
        $sub_cost = $decoded->sub_cost;
        $final_cost = $decoded->final_cost;
        $nights_count = $decoded->nights_count;

        $this->init_UnitById($unit_id);

        $s = $con->prepare("INSERT INTO reservations (r_create_at,r_user_id,r_unit_id,r_from,r_to,r_guests_count,r_card_no,r_card_exp,r_card_ccv,r_card_address,r_night_cost,r_added_cost,r_nights_count,r_sub_cost,r_final_cost) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $s->bind_param('siississssddidd', $get_time, $user_id, $unit_id, $p_from, $p_to, $p_guests, $p_cardno, $p_expdate, $p_ccvno, $p_address, $this->u_one_night_cost, $this->u_added_cost, $nights_count, $sub_cost, $final_cost);
        if($s->execute()){
            return 1;
        }
        else {
            return $con->error;
        }
    }

    public function cancel_reserve($id_arr){
        global $con;
        $decoded = JWT::decode($id_arr);
        $u_id = $decoded->u_id;
        if($u_id >= 1){
            $s = $con->prepare("UPDATE reservations SET r_statue=3 WHERE r_id=?");
            $s->bind_param('i', $u_id);
            if($s->execute()){
                return 1;
            }
            else {
                return $con->error;
            }
        }
    }

    public function delete_reserve($id_arr){
        global $con;
        $decoded = JWT::decode($id_arr);
        $u_id = $decoded->u_id;
        if($u_id >= 1){
            $s = $con->prepare("DELETE FROM reservations WHERE r_id=?");
            $s->bind_param('i', $u_id);
            if($s->execute()){
                return 1;
            }
            else {
                return $con->error;
            }
        }
    }
    
    public function check_like($unit_id){
        global $con;
        global $init_users;

        $getSessio = $_SESSION['UserLoginState'];
        $decode_Login = JWT::decode($getSessio, $init_users->SesKey);
        $user_id = $decode_Login->userLoginId;

        $s = $con->prepare("SELECT l_id FROM likes WHERE l_user_id=? AND l_unit_id=?");
        $s->bind_param('ii', $user_id, $unit_id);
        $s->execute();
        $s->store_result();
        $s->bind_result($l_id);
        if($s->num_rows >= 1){
            $s->fetch();
            return $l_id;
        }
        else {
            return 0;
        }
    }

    public function like_unit($id_arr){
        global $con;
        global $init_users;
		global $get_time;

        $getSessio = $_SESSION['UserLoginState'];
        $decode_Login = JWT::decode($getSessio, $init_users->SesKey);
        $user_id = $decode_Login->userLoginId;

        $decoded = JWT::decode($id_arr);
        $unit_id = $decoded->unit_id;
        if($unit_id >= 1){
            $like_id = $this->check_like($unit_id);
            if($like_id == 0){
                $s = $con->prepare("INSERT INTO likes (l_user_id,l_unit_id,l_created_at) VALUES (?,?,?)");
                $s->bind_param('iis', $user_id, $unit_id, $get_time);
                if($s->execute()){
                    return 1;
                }
                else {
                    return $con->error;
                }
            }
            else {
                $s = $con->prepare("DELETE FROM likes WHERE l_id=?");
                $s->bind_param('i', $like_id);
                if($s->execute()){
                    return 2;
                }
                else {
                    return $con->error;
                }
            }
        }
    }

    public function get_likes($unit_id){
        global $con;
        if($unit_id >= 1){
            $s = $con->prepare("SELECT l_id FROM likes WHERE l_unit_id=?");
            $s->bind_param('i', $unit_id);
            $s->execute();
            $s->store_result();
            return $s->num_rows;
        }
    }

    public function get_liked_unit(){
        global $con;
        global $init_users;

        $getSessio = $_SESSION['UserLoginState'];
        $decode_Login = JWT::decode($getSessio, $init_users->SesKey);
        $user_id = $decode_Login->userLoginId;

        $liked_units = array();

        // $s = $con->prepare();

    }


}
$init_units = new Units_Op();

?>