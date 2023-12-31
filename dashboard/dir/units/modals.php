<div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="add_unit">
    <div class="modal-dialog modal-xl" style="font-family: 'Cairo';">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Unit</h5>
                <div class="btn btn-icon btn-sm btn-active-dark-primary ms-2" id="close_newpatient_modal" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1"></rect>
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body text-left">

                <form id="unit_form" class="form">
                    <div class="card-body p-9">

                        <div class="row mb-10 fv-row">
                            <label class="col-lg-4 col-form-label fw-bolder fs-3"><?=$init_lang->pick_lang('UNIT_IMAGES')?></label>
                            <div class="dropzone col-lg fv-row" id="upload_images">
                                <div class="dz-message needsclick">
                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                    <div class="ms-4">
                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1"><?=$init_lang->pick_lang('ADD_UNIT_IMAGES')?></h3>
                                        <span class="fs-7 fw-bold text-gray-400"><?=$init_lang->pick_lang('ALLOWD_IMAGE_EXT')?></span>
                                    </div>
                                </div>
                                <div class="pt-5 fv-plugins-message-container invalid-feedback" style="display: none;" id="u_images_Err">
                                    <div data-field="u_images" data-validator="notEmpty">Required</div>
                                </div>
                                <input type="hidden" id="chk_u_images" value="0">
                            </div>
                        </div>
                        <input type="hidden" id="u_images" value="">
                            
                        <div class="row g-9 mb-10">
                            <div class="col-md-4 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_TITLE')?></label>
                                <input type="text" id="u_title" name="u_title" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_TITLE')?>" />
                            </div>

                            <div class="col-md-4 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_COUNTRY')?></label>
                                <select name="un_country" id="un_country" 
                                    aria-label="<?php $init_lang->pick_lang('CHOS_COUNTRY_TEXT'); ?>" 
                                    data-control="select2" 
                                    data-placeholder="<?php $init_lang->pick_lang('CHOS_COUNTRY_TEXT'); ?>" 
                                    class="form-select form-select-solid form-select-lg fs-4">
                                    <option value=""><?php $init_lang->pick_lang('CHOS_COUNTRY_TEXT'); ?></option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, Democratic Republic of the Congo</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote D'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curacao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and Mcdonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="XK">Kosovo</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthelemy</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="CS">Serbia and Montenegro</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.s.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                            
                            <div class="col-md-4 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_CITY')?></label>
                                <input type="text" id="un_city" name="un_city" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_CITY')?>" />
                            </div>
                        </div>
                            
                        <div class="row g-9 mb-10">
                            <div class="col-md-6 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_ADDRESS')?></label>
                                <textarea type="text" id="u_address" name="u_address" rows="5" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_ADDRESS'); ?>"></textarea>
                            </div>
                            
                            <div class="col-md-3 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_HOST_COUNT')?></label>
                                <input type="number" id="u_host_count" name="u_host_count" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_HOST_COUNT')?>" />
                                
                                <label class="required fs-4 fw-bolder mt-5 mb-2"><?=$init_lang->pick_lang('UNIT_PATHS_COUNT')?></label>
                                <input type="number" id="u_path_count" name="u_path_count" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_PATHS_COUNT')?>" />
                            </div>
                            
                            <div class="col-md-3 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_ROOM_COUNT')?></label>
                                <input type="number" id="u_room_count" name="u_room_count" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_ROOM_COUNT')?>" />
                            </div>
                        </div>
                            
                        <div class="row g-9 mb-10">

                            <div class="col-md-6 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_DESC')?></label>
                                <textarea type="text" id="u_description" name="u_description" rows="5" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_DESC'); ?>"></textarea>
                            </div>
                            
                            <div class="col-md-3 fv-row">
                                <label class="required fs-4 fw-bolder mb-3"><?=$init_lang->pick_lang('UNIT_SPECS')?></label>
                                
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="u_wifi"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="u_wifi">
                                        <?=$init_lang->pick_lang('UNIT_WIFI')?>
                                    </label>
                                </div>
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="u_garden"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="u_garden">
                                        <?=$init_lang->pick_lang('UNIT_GARDEN')?>
                                    </label>
                                </div>
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="u_tv"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="u_tv">
                                        <?=$init_lang->pick_lang('UNIT_TV')?>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col-md-3 fv-row">
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7 mt-10">
                                    <input class="form-check-input" type="checkbox" value="" id="u_kitchen"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="u_kitchen">
                                        <?=$init_lang->pick_lang('UNIT_KITCHEN')?>
                                    </label>
                                </div>
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="u_workspace"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="u_workspace">
                                        <?=$init_lang->pick_lang('UNIT_WORKSPACE')?>
                                    </label>
                                </div>
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="u_parking"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="u_parking">
                                        <?=$init_lang->pick_lang('UNIT_PARKING')?>
                                    </label>
                                </div>
                            </div>
                        </div>
                            
                        <div class="row g-9 mb-10">
                            
                            <div class="col-md-3 fv-row">
                                <label class="required fs-4 fw-bolder mb-3"><?=$init_lang->pick_lang('UNIT_SPECS')?></label>
                                
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="u_pool"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="u_pool">
                                        <?=$init_lang->pick_lang('UNIT_POOL')?>
                                    </label>
                                </div>
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="u_washer"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="u_washer">
                                        <?=$init_lang->pick_lang('UNIT_WASHER')?>
                                    </label>
                                </div>
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="u_air_conditioning"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="u_air_conditioning">
                                        <?=$init_lang->pick_lang('UNIT_AIR_CONDITION')?>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col-md-3 fv-row">
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7 mt-10">
                                    <input class="form-check-input" type="checkbox" value="" id="u_fans"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="u_fans">
                                        <?=$init_lang->pick_lang('UNIT_FANS')?>
                                    </label>
                                </div>
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="u_refrigerator"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="u_refrigerator">
                                        <?=$init_lang->pick_lang('UNIT_REFRIGATOR')?>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col-md-3 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_ONE_NIGHT_COST')?></label>
                                <input type="number" id="u_one_night_cost" name="u_one_night_cost" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_ONE_NIGHT_COST')?>" />
                                
                                <label class="required fs-4 fw-bolder mt-5 mb-2"><?=$init_lang->pick_lang('UNIT_ADDED_COST')?></label>
                                <input type="number" id="u_added_cost" name="u_added_cost" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_ADDED_COST')?>" />
                            </div>

                        </div>
                        
                    </div>

                    <div class="modal-footer">
                        <button id="save_unit" type="button" class="btn btn-primary">
                            <span class="indicator-label">
                                Save Data
                            </span>
                            <span class="indicator-progress">
                                Please Wait ..
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    </div>
                    <input type="hidden" id="cat_id" value="0">
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="unit_modal">
    <div class="modal-dialog modal-xl" style="font-family: 'Cairo';">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php $init_lang->pick_lang('EDIT_UNIT'); ?></h5>
                <div class="btn btn-icon btn-sm btn-active-dark-primary ms-2" id="close_newpatient_modal" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1"></rect>
                            </g>
                        </svg>
                    </span>
                </div>
            </div>

            <div class="modal-body text-left">
                <form id="eunit_form" class="form">
                    <div class="card-body">
                        <div class="row mb-10 fv-row">
                            <table class="table align-center table-bordered table-responsive fs-6 gy-5" id="images_table">
                                <thead>
                                    <tr class="fw-bold text-gray-800 bg-light" style="text-align: center;">
                                        <th style="font-weight: bold;"><?php $init_lang->pick_lang('IMAGE_TITLE'); ?></th>
                                        <th style="font-weight: bold;"><?php $init_lang->pick_lang('IMAGE_CONTENT'); ?></th>
                                        <th style="font-weight: bold;text-align:center;"><?php $init_lang->pick_lang('MANAGE_IMG'); ?></th>
                                    </tr>
                                </thead>
                                <tbody class="fw-bold fs-5" id="images_table_content">
                                </tbody>
                            </table>
                        </div>

                        <div class="row mb-10 fv-row">
                            <label class="col-lg-4 col-form-label fw-bolder fs-3"><?=$init_lang->pick_lang('UNIT_IMAGES')?></label>
                            <div class="dropzone col-lg fv-row" id="upload_more_images">
                                <div class="dz-message needsclick">
                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                    <div class="ms-4">
                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1"><?=$init_lang->pick_lang('ADD_UNIT_IMAGES')?></h3>
                                        <span class="fs-7 fw-bold text-gray-400"><?=$init_lang->pick_lang('ALLOWD_IMAGE_EXT')?></span>
                                    </div>
                                </div>
                                <div class="pt-5 fv-plugins-message-container invalid-feedback" style="display: none;" id="eu_images_Err">
                                    <div data-field="eu_images" data-validator="notEmpty">Required</div>
                                </div>
                                <input type="hidden" id="chk_eu_images" value="0">
                            </div>
                        </div>
                        <input type="hidden" id="eu_images" value="">
                            
                        <div class="row g-9 mb-10">
                            <div class="col-md-4 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_TITLE')?></label>
                                <input type="text" id="eu_title" name="eu_title" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_TITLE')?>" />
                            </div>

                            <div class="col-md-4 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_COUNTRY')?></label>
                                <select name="eun_country" id="eun_country" 
                                    aria-label="<?php $init_lang->pick_lang('CHOS_COUNTRY_TEXT'); ?>" 
                                    data-control="select2" 
                                    data-placeholder="<?php $init_lang->pick_lang('CHOS_COUNTRY_TEXT'); ?>" 
                                    class="form-select form-select-solid form-select-lg fs-4">
                                    <option value=""><?php $init_lang->pick_lang('CHOS_COUNTRY_TEXT'); ?></option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, Democratic Republic of the Congo</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote D'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curacao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and Mcdonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="XK">Kosovo</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthelemy</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="CS">Serbia and Montenegro</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.s.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                            
                            <div class="col-md-4 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_CITY')?></label>
                                <input type="text" id="eun_city" name="eun_city" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_CITY')?>" />
                            </div>
                        </div>
                            
                        <div class="row g-9 mb-10">
                            <div class="col-md-6 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_ADDRESS')?></label>
                                <textarea type="text" id="eu_address" name="eu_address" rows="5" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_ADDRESS'); ?>"></textarea>
                            </div>
                            
                            <div class="col-md-3 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_HOST_COUNT')?></label>
                                <input type="number" id="eu_host_count" name="eu_host_count" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_HOST_COUNT')?>" />
                                
                                <label class="required fs-4 fw-bolder mt-5 mb-2"><?=$init_lang->pick_lang('UNIT_PATHS_COUNT')?></label>
                                <input type="number" id="eu_path_count" name="eu_path_count" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_PATHS_COUNT')?>" />
                            </div>
                            
                            <div class="col-md-3 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_ROOM_COUNT')?></label>
                                <input type="number" id="eu_room_count" name="eu_room_count" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_ROOM_COUNT')?>" />
                            </div>
                        </div>
                            
                        <div class="row g-9 mb-10">

                            <div class="col-md-6 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_DESC')?></label>
                                <textarea type="text" id="eu_description" name="eu_description" rows="5" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_DESC'); ?>"></textarea>
                            </div>
                            
                            <div class="col-md-3 fv-row">
                                <label class="required fs-4 fw-bolder mb-3"><?=$init_lang->pick_lang('UNIT_SPECS')?></label>
                                
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="eu_wifi"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="eu_wifi">
                                        <?=$init_lang->pick_lang('UNIT_WIFI')?>
                                    </label>
                                </div>
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="eu_garden"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="eu_garden">
                                        <?=$init_lang->pick_lang('UNIT_GARDEN')?>
                                    </label>
                                </div>
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="eu_tv"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="eu_tv">
                                        <?=$init_lang->pick_lang('UNIT_TV')?>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col-md-3 fv-row">
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7 mt-10">
                                    <input class="form-check-input" type="checkbox" value="" id="eu_kitchen"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="eu_kitchen">
                                        <?=$init_lang->pick_lang('UNIT_KITCHEN')?>
                                    </label>
                                </div>
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="eu_workspace"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="eu_workspace">
                                        <?=$init_lang->pick_lang('UNIT_WORKSPACE')?>
                                    </label>
                                </div>
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="eu_parking"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="eu_parking">
                                        <?=$init_lang->pick_lang('UNIT_PARKING')?>
                                    </label>
                                </div>
                            </div>
                        </div>
                            
                        <div class="row g-9 mb-10">
                            
                            <div class="col-md-3 fv-row">
                                <label class="required fs-4 fw-bolder mb-3"><?=$init_lang->pick_lang('UNIT_SPECS')?></label>
                                
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="eu_pool"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="eu_pool">
                                        <?=$init_lang->pick_lang('UNIT_POOL')?>
                                    </label>
                                </div>
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="eu_washer"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="eu_washer">
                                        <?=$init_lang->pick_lang('UNIT_WASHER')?>
                                    </label>
                                </div>
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="eu_air_conditioning"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="eu_air_conditioning">
                                        <?=$init_lang->pick_lang('UNIT_AIR_CONDITION')?>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col-md-3 fv-row">
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7 mt-10">
                                    <input class="form-check-input" type="checkbox" value="" id="eu_fans"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="eu_fans">
                                        <?=$init_lang->pick_lang('UNIT_FANS')?>
                                    </label>
                                </div>
                                <div class="form-check form-switch form-check-custom form-check-solid mb-7">
                                    <input class="form-check-input" type="checkbox" value="" id="eu_refrigerator"/>
                                    <label class="form-check-label fs-4 fw-bolder" for="eu_refrigerator">
                                        <?=$init_lang->pick_lang('UNIT_REFRIGATOR')?>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col-md-3 fv-row">
                                <label class="required fs-4 fw-bolder mb-2"><?=$init_lang->pick_lang('UNIT_ONE_NIGHT_COST')?></label>
                                <input type="number" id="eu_one_night_cost" name="eu_one_night_cost" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_ONE_NIGHT_COST')?>" />
                                
                                <label class="required fs-4 fw-bolder mt-5 mb-2"><?=$init_lang->pick_lang('UNIT_ADDED_COST')?></label>
                                <input type="number" id="eu_added_cost" name="eu_added_cost" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('UNIT_ADDED_COST')?>" />
                            </div>

                        </div>
                    </div>
                </form>
                <input id="oldid" type="hidden" value="">
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-active-light-primary me-2" data-bs-dismiss="modal"><?=$init_lang->pick_lang('CANCEL_TEXT')?></button>
                    <button type="button" class="btn btn-primary me-2 px-20" id="update_unit">
                        <span class="indicator-label">
                            <?=$init_lang->pick_lang('UPDATE_UNIT')?>
                        </span>
                        <span class="indicator-progress">
                            <?=$init_lang->pick_lang('PLEASE_WAIT_TEXT')?>
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
