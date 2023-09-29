<div class="tab-pane fade mb-20 pb-20" id="tab_2">
    <div class="card mb-20 mb-xl-10">
        <div class="card-header cursor-pointer">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0"><?php $init_lang->pick_lang('VIEW_PROFILE_INFO'); ?></h3>
            </div>
        </div>

        <div class="card-body p-9 row">

            <form id="profile_form" class="form">
                <div class="card-body p-9">

                    <div class="row mb-10 fv-row">
                        <label class="col-lg-2 offset-1 col-form-label fw-bolder fs-3"><?=$init_lang->pick_lang('USER_AVATAR')?></label>
                        <div class="col-lg-3 col-form-label fw-bold fs-6" style="padding: 0 10px 0 22px;">
                            <div class="old_imgstyle">
                                <img src="<?=$u_avatar?>" id="user_thumb_old" style="max-height: 100px;">
                            </div>
                        </div>
                        <div class="dropzone col-lg-3 fv-row" id="upload_thumb">
                            <div class="dz-message needsclick">
                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1"><?=$init_lang->pick_lang('CHANGE_AVATAR_TEXT')?></h3>
                                    <span class="fs-7 fw-bold text-gray-400"><?=$init_lang->pick_lang('ALLOWD_IMAGE_EXT')?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="u_avatar" value="<?=$init_users->u_avatar?>">
                    
                    <div class="row mb-6">
                        <label class="col-lg-2 offset-1 col-form-label required fw-bolder fs-3"><?=$init_lang->pick_lang('INPUT_FULL_NAME')?></label>
                        <div class="col-lg-4 fv-row">
                            <input type="text" id="u_name" name="u_name" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('INPUT_FULL_NAME')?>" value="<?=$init_users->u_name?>" />
                        </div>
                    </div>
                    
                    <div class="row mb-6">
                        <label class="col-lg-2 offset-1 col-form-label required fw-bolder fs-3"><?=$init_lang->pick_lang('INPUT_EMAIL')?></label>
                        <div class="col-lg-4 fv-row">
                            <input type="text" id="u_email" name="u_email" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('INPUT_EMAIL'); ?>" value="<?=$init_users->u_email?>" disabled />
                        </div>
                    </div>
                    
                    <div class="row mb-6">
                        <label class="col-lg-2 offset-1 col-form-label fw-bolder fs-3"><?=$init_lang->pick_lang('MOBILE_TEXT')?></label>
                        <div class="col-lg-4 fv-row">
                            <input type="text" id="u_mobile" name="u_mobile" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('MOBILE_TEXT'); ?>" value="<?=$init_users->u_mobile?>" />
                        </div>
                    </div>
                    
                    <div class="row mb-6">
                        <label class="col-lg-2 offset-1 col-form-label required fw-bolder fs-3"><?php $init_lang->pick_lang('INPUT_COUNTRY'); ?></label>
                        <div class="col-lg-4 fv-row">
                            <select name="u_country" id="u_country" 
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
                    </div>
                    
                    <div class="row mb-6">
                        <label class="col-lg-2 offset-1 col-form-label fw-bolder fs-3"><?=$init_lang->pick_lang('INPUT_CITY'); ?></label>
                        <div class="col-lg-4 fv-row">
                            <input type="text" id="u_city" name="u_city" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('INPUT_CITY'); ?>" value="<?=$init_users->u_city?>" />
                        </div>
                    </div>
                    
                    <div class="row mb-6">
                        <label class="col-lg-2 offset-1 col-form-label required fw-bolder fs-3"><?=$init_lang->pick_lang('ACC_TYPE')?></label>
                        <div class="col-lg-4 fv-row">
                            <select name="u_type" id="u_type" data-hide-search="true" aria-label="<?=$init_lang->pick_lang('CHOS_TYPE_TEXT')?>" 
                                data-control="select2" data-placeholder="<?php $init_lang->pick_lang('CHOS_TYPE_TEXT'); ?>" class="form-select form-select-solid form-select-lg fs-4">
                                <option value=""><?=$init_lang->pick_lang('CHOS_TYPE_TEXT')?></option>
                                <option value="1"><?=$init_lang->pick_lang('SELLER_TEXT')?></option>
                                <option value="2"><?=$init_lang->pick_lang('CUSTOMER_TEXT')?></option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row mb-6">
                        <label class="col-lg-2 offset-1 col-form-label fw-bolder fs-3"><?=$init_lang->pick_lang('PREF_LANG')?></label>
                        <div class="col-lg-4 fv-row">
                            <select name="u_lang" id="u_lang" data-hide-search="true" aria-label="<?=$init_lang->pick_lang('PREF_LANG')?>" 
                                data-control="select2" data-placeholder="<?=$init_lang->pick_lang('PREF_LANG')?>" class="form-select form-select-solid form-select-lg fs-4">
                                <option value=""><?=$init_lang->pick_lang('PREF_LANG')?></option>
                                <option value="EN"><?=$init_lang->pick_lang('ENGLISH_TEXT')?></option>
                                <option value="DE"><?=$init_lang->pick_lang('GERMAN_TEXT')?></option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer d-flex justify-content-end py-6">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2"><?=$init_lang->pick_lang('CANCEL_TEXT')?></button>
                    <button type="button" class="btn btn-primary me-2 px-20" id="submit_data">
                        <span class="indicator-label">
                            <?=$init_lang->pick_lang('SAVE_DATA')?>
                        </span>
                        <span class="indicator-progress">
                            <?=$init_lang->pick_lang('PLEASE_WAIT_TEXT')?>
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="card mb-5 mb-xl-10" style="font-family: 'Cairo';">
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0"><?=$init_lang->pick_lang('MANAGE_LOGIN')?></h3>
            </div>
        </div>
        <div id="kt_account_signin_method" class="collapse show">
            <div class="card-body border-top p-9">
                <div class="d-flex flex-wrap align-items-center">
                    <div id="kt_signin_email">
                        <div class="fs-6 fw-bolder mb-1"><?=$init_lang->pick_lang('INPUT_EMAIL')?></div>
                        <div class="fw-bold text-gray-600"><?=$init_users->u_email?></div>
                    </div>
                    <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                        <form id="kt_signin_change_email" class="form">
                            <div class="row mb-6">
                                <div class="col-lg-4 offset-2 mb-4 mb-lg-0">
                                    <div class="fv-row mb-0">
                                        <label for="emailaddress" class="form-label fs-6 fw-bolder mb-3"><?=$init_lang->pick_lang('INPUT_NEW_EMAIL')?></label>
                                        <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="<?=$init_lang->pick_lang('YOUR_EMAIL')?>" name="emailaddress" value="" >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0">
                                        <label for="confirmemailpassword" class="form-label fs-6 fw-bolder mb-3"><?php $init_lang->pick_lang('INPUT_CONFIRMATION_PASSWORD'); ?></label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" placeholder="<?php $init_lang->pick_lang('YOUR_PASSWORD'); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end py-6">
                                <button type="reset" id="kt_signin_cancel" class="btn btn-light btn-active-light-primary me-2"><?=$init_lang->pick_lang('CANCEL_TEXT')?></button>
                                <button type="button" class="btn btn-primary me-2 px-20" id="kt_signin_submit">
                                    <span class="indicator-label">
                                        <?=$init_lang->pick_lang('SAVE_DATA')?>
                                    </span>
                                    <span class="indicator-progress">
                                        <?=$init_lang->pick_lang('PLEASE_WAIT_TEXT')?>
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>

                        </form>
                    </div>
                    <div id="kt_signin_email_button" class="ms-auto">
                        <button class="btn btn-light btn-active-light-primary"><?=$init_lang->pick_lang('CHANGE_EMAIL')?></button>
                    </div>
                </div>
                <div class="separator separator-dashed my-6"></div>
                <div class="d-flex flex-wrap align-items-center mb-10">
                    <div id="kt_signin_password">
                        <div class="fs-6 fw-bolder mb-1"><?=$init_lang->pick_lang('INPUT_PASSWORD')?></div>
                        <div class="fw-bold text-gray-600">************</div>
                    </div>
                    <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                        <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                            <div class="row mb-1">
                                <div class="col-lg-3 offset-1">
                                    <div class="fv-row mb-0">
                                        <label for="currentpassword" class="form-label fs-6 fw-bolder mb-3"><?=$init_lang->pick_lang('INPUT_CURRENT_PASSWORD')?></label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" placeholder="<?=$init_lang->pick_lang('INPUT_CURRENT_PASSWORD')?>" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-0">
                                        <label for="newpassword" class="form-label fs-6 fw-bolder mb-3"><?=$init_lang->pick_lang('INPUT_NEW_PASSWORD')?></label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" placeholder="<?=$init_lang->pick_lang('INPUT_NEW_PASSWORD')?>" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-0">
                                        <label for="confirmpassword" class="form-label fs-6 fw-bolder mb-3"><?php $init_lang->pick_lang('INPUT_REPASSWORD'); ?></label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" placeholder="<?php $init_lang->pick_lang('INPUT_REPASSWORD'); ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end py-6">
                                <button type="reset" id="kt_password_cancel" class="btn btn-light btn-active-light-primary me-2"><?=$init_lang->pick_lang('CANCEL_TEXT')?></button>
                                <button type="button" class="btn btn-primary me-2 px-20" id="kt_password_submit">
                                    <span class="indicator-label">
                                        <?=$init_lang->pick_lang('SAVE_DATA')?>
                                    </span>
                                    <span class="indicator-progress">
                                        <?=$init_lang->pick_lang('PLEASE_WAIT_TEXT')?>
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div id="kt_signin_password_button" class="ms-auto">
                        <button class="btn btn-light btn-active-light-primary"><?php $init_lang->pick_lang('UPDATE_PASSWORD'); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
