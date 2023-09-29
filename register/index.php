<?php
ini_set('display_errors', 1);  
include '../system/config/init.php';

if(isset($_SESSION['UserLoginState'])) {
	$checkResult = $init_users->CheckLogVal();
	if($checkResult == 1){
		header('Location:../');
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<!--begin::Head-->

<head>
    <title><?=$init_lang->pick_lang('REGISTER_TEXT')?> | <?=APPNAMEEN?></title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="../logo.svg" />
    <link rel="stylesheet" href="https:fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="../<?php echo CPTMPL; ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../<?php echo CPTMPL; ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../<?php echo CPTMPL; ?>assets/css/style.css?v=<?php echo fileatime('../' . CPTMPL . 'assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
</head>
<body id="kt_body" class="bg-body" style="font-family: Cairo !important;">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-xl-row flex-column-fluid">
        
            <div class="d-flex flex-column flex-center flex-lg-row-fluid">
                <div class="d-flex align-items-start flex-column p-5 p-lg-15">
                    <a href="#" class="mb-15 w-100 text-center">
                        <img alt="Logo" src="../logo.svg" class="w-100px" />
                        <img alt="Logo" src="../logo (2).svg" class="w-250px" />
                    </a>
                    <h1 class="text-dark fs-2x mb-3"><?php $init_lang->pick_lang('WELCOME_TEXT'); ?></h1>
                    <div class="fw-bold fs-4 text-gray-400 mb-10" style="max-width:500px;">
						<?php $init_lang->pick_lang('SITE_DESC'); ?>
                    </div>
                </div>
            </div>
            
            <div class="flex-row-fluid d-flex flex-center justfiy-content-xl-first p-10">
                <div class="row p-5 shadow-sm bg-body rounded w-100 w-md-550px mx-auto ms-xl-20">
                    <div class="text-center mb-10">
                        <h1 class="text-dark mb-3"><?php $init_lang->pick_lang('REGISTERNOW_TEXT'); ?></h1>
						<div class="text-gray-400 fw-bold fs-4 m-5">
							<?php $init_lang->pick_lang('ALREADY_REGISTERED_TEXT'); ?>
							<a href="../login/" class="link-primary fw-bolder">
								<?php $init_lang->pick_lang('LOGIN_HERE_TEXT'); ?>
							</a>
						</div>
                    </div>
                    <div id="div_worker">
                        <form class="form" id="users_form">

                            <div class="fv-row mb-10">
                                <label class="form-label fw-bolder text-dark fs-6 required">
                                    <?php $init_lang->pick_lang('INPUT_TYPE'); ?>
                                </label>
                                <select name="c_utype" id="c_utype" data-hide-search="true" aria-label="<?php $init_lang->pick_lang('CHOS_TYPE_TEXT'); ?>" 
                                    data-control="select2" data-placeholder="<?php $init_lang->pick_lang('CHOS_TYPE_TEXT'); ?>" class="form-select form-select-solid form-select-lg">
                                    <option value=""><?php $init_lang->pick_lang('CHOS_TYPE_TEXT'); ?></option>

                                    <option value="1"><?php $init_lang->pick_lang('SELLER_TEXT'); ?></option>
                                    <option value="2"><?php $init_lang->pick_lang('CUSTOMER_TEXT'); ?></option>
                                </select>
                            </div>

                            <div class="fv-row mb-10">
                                <label class="form-label fw-bolder text-dark fs-6"><?php $init_lang->pick_lang('INPUT_FULL_NAME'); ?></label>
                                <input class="form-control form-control-solid" type="text" id="c_fullname" name="c_fullname" placeholder="">
                            </div>

                            <div class="fv-row mb-10">
                                <label class="form-label fw-bolder text-dark fs-6 required"><?php $init_lang->pick_lang('INPUT_EMAIL'); ?></label>
                                <input class="form-control form-control-solid" type="text" id="c_email" name="c_email" placeholder="">
                            </div>

                            <div class="fv-row mb-10">
                                <label class="form-label fw-bolder text-dark fs-6 required"><?php $init_lang->pick_lang('INPUT_COUNTRY'); ?></label>
                                <select name="c_country" id="c_country" 
                                    aria-label="<?php $init_lang->pick_lang('CHOS_COUNTRY_TEXT'); ?>" 
                                    data-control="select2" 
                                    data-placeholder="<?php $init_lang->pick_lang('CHOS_COUNTRY_TEXT'); ?>" 
                                    class="form-select form-select-solid form-select-lg">
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
                                <input class="form-control form-control-solid" type="text" id="c_city" name="c_city" placeholder="">
                            </div>

                            <div class="fv-row mb-10">
                                <label class="form-label fw-bolder text-dark fs-6"><?php $init_lang->pick_lang('MOBILE_TEXT'); ?></label>
                                <input class="form-control form-control-solid" type="text" id="c_mobile" name="c_mobile" placeholder="">
                            </div>

                            <div class="mb-7 fv-row" data-kt-password-meter="true">
                                <div class="mb-1">
                                    <label class="form-label fw-bolder text-dark fs-6 required"><?php $init_lang->pick_lang('INPUT_PASSWORD'); ?></label>
                                    <div class="position-relative mb-3">
                                        <input class="form-control form-control-solid" type="password" name="c_password" id="c_password" placeholder="">
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
                                <input class="form-control form-control-solid" type="password" name="c_repassword" id="c_repassword" placeholder="">
                            </div>

                            <div class="fv-row mb-10">
                                <label class="form-check form-check-custom form-check-solid form-check-inline mb-5 ">
                                    <input class="form-check-input" type="checkbox" name="c_terms" id="c_terms" value="">
                                    <span class="form-check-label fw-bold text-gray-700"><?php $init_lang->pick_lang('AGREETO_TEXT'); ?>
                                        <a href="#" class="link-primary ms-1"><?php $init_lang->pick_lang('TERMS_TEXT'); ?></a></span>
                                </label>
                            </div>

                            <div class="text-center pb-lg-0 pb-8">
                                <button type="button" id="submit_register" class="btn btn-lg btn-primary w-100 mb-5 try_submit">
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

					<div class="text-end pb-lg-0 pb-8">

						<button type="button" class="btn btn-flex align-items-cenrer justify-content-center justify-content-md-between align-items-lg-cenrer flex-md-content-between text-muted text-hover-primary px-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
							<span class="d-md-inline">
								<?php $init_lang->pick_lang('CHANGE_LANGUAGE'); ?>
							</span>
							<span class="svg-icon svg-icon-4 ms-md-4 me-0">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M12.5657 11.3657L16.75 15.55C17.1642 15.9643 17.8358 15.9643 18.25 15.55C18.6642 15.1358 18.6642 14.4643 18.25 14.05L12.7071 8.50716C12.3166 8.11663 11.6834 8.11663 11.2929 8.50715L5.75 14.05C5.33579 14.4643 5.33579 15.1358 5.75 15.55C6.16421 15.9643 6.83579 15.9643 7.25 15.55L11.4343 11.3657C11.7467 11.0533 12.2533 11.0533 12.5657 11.3657Z" fill="currentColor" />
								</svg>
							</span>
						</button>

						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg fw-bold w-200px pb-3" data-kt-menu="true">
							<div class="menu-item px-3">
								<div class="menu-content fs-7 text-dark fw-bolder px-3 py-4">
									<?php $init_lang->pick_lang('SELECT_LANGUAGE'); ?>
								</div>
							</div>
							<div class="separator mb-3 opacity-75"></div>
							<div class="menu-item px-3">
								<button href="#" class="btn btn-link btn-color-muted px-3 lang_to_de">
									<?php $init_lang->pick_lang('GERMAN_TEXT'); ?>
								</button>
							</div>
							<div class="menu-item px-3">
								<button href="#" class="btn btn-link btn-color-muted px-3 lang_to_en">
									<?php $init_lang->pick_lang('ENGLISH_TEXT'); ?>
								</button>
							</div>
						</div>

					</div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" class="EMAIL_REQUIRE" value="<?php $init_lang->pick_lang('EMAIL_REQUIRE'); ?>">
    <input type="hidden" class="EMAIL_WRONG" value="<?php $init_lang->pick_lang('EMAIL_WRONG'); ?>">
    <input type="hidden" class="PASSWORD_REQUIRE" value="<?php $init_lang->pick_lang('PASSWORD_REQUIRE'); ?>">
    <input type="hidden" class="PASSWORD_LENGTH_CHKERR" value="<?php $init_lang->pick_lang('PASSWORD_LENGTH_CHKERR'); ?>">
    <input type="hidden" class="REPASSWORD_DIF_CHKERR" value="<?php $init_lang->pick_lang('REPASSWORD_DIF_CHKERR'); ?>">
    <input type="hidden" class="COUNTRY_REQUIRE" value="<?php $init_lang->pick_lang('COUNTRY_REQUIRE'); ?>">
    <input type="hidden" class="CITY_REQUIRE" value="<?php $init_lang->pick_lang('CITY_REQUIRE'); ?>">
    <input type="hidden" class="TYPE_REQUIRE" value="<?php $init_lang->pick_lang('TYPE_REQUIRE'); ?>">
    <input type="hidden" class="SUCCESS_ADD_TEXT" value="<?php $init_lang->pick_lang('SUCCESS_ADD_TEXT'); ?>">
    <input type="hidden" class="CONTINUE_BTN" value="<?php $init_lang->pick_lang('CONTINUE_BTN'); ?>">
    <input type="hidden" class="EXSIST_ERR_TEXT" value="<?php $init_lang->pick_lang('EXSIST_ERR_TEXT'); ?>">
    <input type="hidden" class="TRYAGAIN_TEXT" value="<?php $init_lang->pick_lang('TRYAGAIN_TEXT'); ?>">
    <input type="hidden" class="TERMS_REQUIRE" value="<?php $init_lang->pick_lang('TERMS_REQUIRE'); ?>">
    <input type="hidden" class="EMAIL_CHKERR" value="<?php $init_lang->pick_lang('EMAIL_CHKERR'); ?>">
    <input type="hidden" class="CONFIRMREG_TEXT" value="<?php $init_lang->pick_lang('CONFIRMREG_TEXT'); ?>">
    <input type="hidden" class="CONFIRM_TEXT" value="<?php $init_lang->pick_lang('CONFIRM_TEXT'); ?>">
    <input type="hidden" class="CANCEL_TEXT" value="<?php $init_lang->pick_lang('CANCEL_TEXT'); ?>">
    
    <script src="../<?php echo CPTMPL; ?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="../<?php echo CPTMPL; ?>assets/js/scripts.bundle.js"></script>
    
    <script type="module" src="../<?php echo DIRLIBS; ?>js/js-cookie/dist/js.cookie.js"></script>
    
    <script src="<?php echo '../' . DIRLIBS; ?>js/jwt.js"></script>
    
    <script src="js/op.js?v=<?php echo fileatime("js/op.js"); ?>"></script>
    
</body>
</html>
