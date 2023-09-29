<div class="modal fade" tabindex="-1" id="res_modal">
    <div class="modal-dialog modal-xl" style="font-family: 'Cairo';">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php $init_lang->pick_lang('REQUEST_BOOK'); ?></h5>
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

            <div class="modal-body text-left min-h-700px">
                <div class="card-body pt-10">
                    <div class="row g-9">
                        <div class="col-md-7 row">

                            <h3 class="mb-10 mt-5"><?=$init_lang->pick_lang('PAYMENT_DETAILS')?></h2>

                            <form id="purchase_form" class="form">
                        
                                <div class="col-md-12 mb-5 fv-row">
                                    <label class="required fs-4 fw-bolder mb-2 ms-1"><?=$init_lang->pick_lang('CARD_NUMBER')?></label>
                                    <input type="number" id="p_cardno" name="p_cardno" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('CARD_NUMBER')?>" />
                                </div>
                                
                                <div class="row mb-5 me-0 pe-0">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-4 fw-bolder mb-2 ms-1"><?=$init_lang->pick_lang('EXPIRE_DATE')?></label>
                                        <input type="text" id="p_expdate" name="p_expdate" class="form-control form-control-lg form-control-solid fs-4" placeholder="MM/YY" />
                                    </div>
                                    <div class="col-md-6 pe-0 me-0 fv-row">
                                        <label class="required fs-4 fw-bolder mb-2 ms-1"><?=$init_lang->pick_lang('CCV_NUMBER')?></label>
                                        <input type="text" id="p_ccvno" name="p_ccvno" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('CCV_NUMBER')?>" />
                                    </div>
                                </div>
                            
                                <div class="col-md-12 mb-5 fv-row">
                                    <label class="required fs-4 fw-bolder mb-2 ms-1"><?=$init_lang->pick_lang('FULL_ADDRESS')?></label>
                                    <textarea type="text" id="p_address" name="p_address" class="form-control form-control-lg form-control-solid fs-4" placeholder="<?=$init_lang->pick_lang('FULL_ADDRESS')?>"></textarea>
                                </div>

                                <input id="oldid" type="hidden" value="">
                            </form>
                                
                            <div class="row g-3" id="login_logout_div">
                                <div class="col-md-6">
                                    <button type="submit" id="login_button" class="btn btn-light-primary w-100 mb-5">
                                        <?=$init_lang->pick_lang('LOGIN_TEXT')?>
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit"id="register_button" class="btn btn-light-primary w-100 mb-5">
                                        <?=$init_lang->pick_lang('REGISTER_TEXT')?>
                                    </button>
                                </div>
                            </div>

                            <div class="row g-10 mb-9 col-10 offset-1 bg-light card" id="login_div" style="display: none;">
                                <form class="form" id="login_form">
                                    <div class="fv-row mb-10">
                                        <label class="form-label fw-bolder text-dark fs-6 required"><?php $init_lang->pick_lang('INPUT_EMAIL'); ?></label>
                                        <input class="form-control" type="text" id="user_email" name="user_email" placeholder="<?php $init_lang->pick_lang('INPUT_EMAIL'); ?>">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label fw-bolder text-dark fs-6 required"><?php $init_lang->pick_lang('INPUT_PASSWORD'); ?></label>
                                        <input class="form-control" type="password" name="user_password" id="user_password" placeholder="<?php $init_lang->pick_lang('INPUT_PASSWORD'); ?>">
                                    </div>
                                    <div class="text-center pb-lg-0 pt-8 mb-10 ">
                                        <button type="button" id="submit_login" class="btn btn-lg btn-primary w-100 mb-5">
                                            <span class="indicator-label">
                                                <?php $init_lang->pick_lang('LOGIN_TEXT'); ?>
                                            </span>
                                            <span class="indicator-progress">
                                                <?php $init_lang->pick_lang('PLEASE_WAIT_TEXT'); ?>
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="row g-10 mb-9 col-10 offset-1 bg-light card" id="register_div" style="display: none;">
                                <form class="form" id="register_form">
                                    <div class="fv-row mb-10">
                                        <label class="form-label fw-bolder text-dark fs-6 required"><?php $init_lang->pick_lang('INPUT_TYPE'); ?></label>
                                        <select name="c_utype" id="c_utype" data-hide-search="true" aria-label="<?php $init_lang->pick_lang('CHOS_TYPE_TEXT'); ?>" 
                                            data-control="select2" data-placeholder="<?php $init_lang->pick_lang('CHOS_TYPE_TEXT'); ?>" class="form-select form-select-lg">
                                            <option value=""><?php $init_lang->pick_lang('CHOS_TYPE_TEXT'); ?></option>
                                            <option value="1"><?php $init_lang->pick_lang('SELLER_TEXT'); ?></option>
                                            <option value="2"><?php $init_lang->pick_lang('CUSTOMER_TEXT'); ?></option>
                                        </select>
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label fw-bolder text-dark fs-6"><?php $init_lang->pick_lang('INPUT_FULL_NAME'); ?></label>
                                        <input class="form-control" type="text" id="c_fullname" name="c_fullname" placeholder="<?php $init_lang->pick_lang('INPUT_FULL_NAME'); ?>">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label fw-bolder text-dark fs-6 required"><?php $init_lang->pick_lang('INPUT_EMAIL'); ?></label>
                                        <input class="form-control" type="text" id="c_email" name="c_email" placeholder="<?php $init_lang->pick_lang('INPUT_EMAIL'); ?>">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label fw-bolder text-dark fs-6 required"><?php $init_lang->pick_lang('INPUT_COUNTRY'); ?></label>
                                        <select name="c_country" id="c_country" class="form-select form-select-lg" aria-label="<?php $init_lang->pick_lang('CHOS_COUNTRY_TEXT'); ?>" data-control="select2" data-placeholder="<?php $init_lang->pick_lang('CHOS_COUNTRY_TEXT'); ?>">
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
                                    <div class="fv-row mb-10">
                                        <label class="form-label fw-bolder text-dark fs-6 required"><?php $init_lang->pick_lang('INPUT_CITY'); ?></label>
                                        <input class="form-control" type="text" id="c_city" name="c_city" placeholder="<?php $init_lang->pick_lang('INPUT_CITY'); ?>">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label fw-bolder text-dark fs-6"><?php $init_lang->pick_lang('MOBILE_TEXT'); ?></label>
                                        <input class="form-control" type="text" id="c_mobile" name="c_mobile" placeholder="<?php $init_lang->pick_lang('MOBILE_TEXT'); ?>">
                                    </div>
                                    <div class="mb-7 fv-row" data-kt-password-meter="true">
                                        <div class="mb-1">
                                            <label class="form-label fw-bolder text-dark fs-6 required"><?php $init_lang->pick_lang('INPUT_PASSWORD'); ?></label>
                                            <div class="position-relative mb-3">
                                                <input class="form-control" type="password" name="c_password" id="c_password" placeholder="<?php $init_lang->pick_lang('INPUT_PASSWORD'); ?>">
                                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                                    <i class="bi bi-eye-slash fs-2"></i>
                                                    <i class="bi bi-eye fs-2 d-none"></i>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label fw-bolder text-dark fs-6 required"><?php $init_lang->pick_lang('INPUT_REPASSWORD'); ?></label>
                                        <input class="form-control" type="password" name="c_repassword" id="c_repassword" placeholder="<?php $init_lang->pick_lang('INPUT_REPASSWORD'); ?>">
                                    </div>
                                    <div class="fv-row mb-10">
                                        <label class="form-check form-check-custom form-check-solid form-check-inline mb-5 ">
                                            <input class="form-check-input" type="checkbox" name="c_terms" id="c_terms" value="">
                                            <span class="form-check-label fw-bold text-gray-700"><?php $init_lang->pick_lang('AGREETO_TEXT'); ?>
                                                <a href="#" class="link-primary ms-1"><?php $init_lang->pick_lang('TERMS_TEXT'); ?></a></span>
                                        </label>
                                    </div>
                                    <div class="text-center pb-lg-0 pb-8">
                                        <button type="button" id="submit_register" class="btn btn-lg btn-primary w-100 mb-5">
                                            <span class="indicator-label">
                                                <?php $init_lang->pick_lang('REGISTER_TEXT'); ?>
                                            </span>
                                            <span class="indicator-progress">
                                                <?php $init_lang->pick_lang('PLEASE_WAIT_TEXT'); ?>
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>                            
                                </form>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="card bg-light card-flush py-4">
                                <div class="card-body py-0">
                                    <div class="d-flex">
                                        <div class="symbol symbol-60px symbol-2by3 me-4">
                                            <div class="symbol-label" id="confirming_image" style=""></div>
                                        </div>
                                        <div class="m-0">
                                            <span class="text-dark fw-bolder text-hover-primary fs-6 unit_title"></span>
                                            <span class="text-gray-600 fw-bold d-block pt-1 fs-7">From 
                                                <b class="date_from"></b> To 
                                                <b class="date_to"></b>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="separator my-4 border-gray-300"></div>

                                    <h3 class="mb-5"><?=$init_lang->pick_lang('ORDER_DETAILS')?></h2>

                                    <div class="d-flex flex-column">

                                        <div class="fv-row">

                                            <div class="d-flex align-items-center mb-3">
                                                <div class="flex-grow-1">
                                                    <span class="text-gray-800 text-hover-primary fs-4 u_one_night_cost">$ </span> x 2 <?=$init_lang->pick_lang('NIGHTS_TEXT')?>
                                                </div>
                                                <span class="fs-4 fw-bolder sub_cost">$ </span>
                                            </div>

                                            <div class="d-flex align-items-center mb-3">
                                                <div class="flex-grow-1">
                                                    <span class="text-gray-800 text-hover-primary fs-4"><?=$init_lang->pick_lang('ADD_FEE')?></span>
                                                </div>
                                                <span class="fs-4 fw-bolder u_added_cost">$ </span>
                                            </div>

                                        </div>
                                        
                                        <div class="separator my-4 border-gray-300"></div>
                                        
                                        <div class="fv-row">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <span class="text-primary text-hover-dark fw-bolder fs-3"><?=$init_lang->pick_lang('TOTAL_TEXT')?></span>
                                                </div>
                                                <span class="fs-3 fw-bolder final_cost">$ </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="text-center pb-lg-0 pt-8">
                                <button type="button" id="submit_reserve" class="btn btn-lg btn-primary w-100 mb-10" disabled>
                                    <span class="indicator-label">
                                        <?php $init_lang->pick_lang('SUBMIT_RESERVE'); ?>
                                    </span>
                                    <span class="indicator-progress">
                                        <?php $init_lang->pick_lang('PLEASE_WAIT_TEXT'); ?>
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>