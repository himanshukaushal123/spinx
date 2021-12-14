<?php
include('dbConnection.php');

if(isset($_REQUEST['submit'])) {
 $firstname = $_REQUEST['firstname'];
 $lastname = $_REQUEST['lastname'];
 $email = $_REQUEST['email'];
 $company = $_REQUEST['company'];
 $phone = $_REQUEST['phone'];
 $projecttype = $_REQUEST['projecttype'];
 $message = $_REQUEST['message'];
}
 ?>




<div class="hbspt-form">
                    <form action="" method="post">
                        <fieldset class="form-columns-1">
                            <div class="hs_firstname hs-firstname hs-fieldtype-text field hs-form-field" ><label  placeholder="Enter your First Name"><span>First Name</span><span class="hs-form-required">*</span></label><legend class="hs-field-desc" style="display:none;"></legend><div class="input"><input class="hs-input invalid error" type="text" name="firstname"></div>
                            <ul class="no-list hs-error-msgs inputs-list" style="display:block;" role="alert" >
                                <li ><label class="hs-error-msg" >Please complete this required field.</label></li>
                            </ul>
                        </div>
                        </fieldset>

                        <fieldset class="form-columns-1">
                            <div class="hs_lastname hs-lastname hs-fieldtype-text field hs-form-field" ><label  placeholder=""><span>Last Name</span><span class="hs-form-required">*</span></label><legend class="hs-field-desc" style="display:none;"></legend><div class="input"><input class="hs-input invalid error" type="text" name="lastname"></div>
                            <ul class="no-list hs-error-msgs inputs-list" style="display:block;" role="alert" >
                                <li ><label class="hs-error-msg" >Please complete this required field.</label></li>
                            </ul>
                        </div>
                        </fieldset>

                        <fieldset class="form-columns-1">
                            <div class="hs_email hs-email hs-fieldtype-text field hs-form-field" ><label  placeholder=""><span> Email</span><span class="hs-form-required">*</span></label><legend class="hs-field-desc" style="display:none;"></legend><div class="input"><input class="hs-input invalid error" type="email" name="email"></div>
                            <ul class="no-list hs-error-msgs inputs-list" style="display:block;" role="alert" >
                                <li ><label class="hs-error-msg" >Please complete this required field.</label></li>
                            </ul>
                        </div>
                        </fieldset>

                        <fieldset class="form-columns-2">
                            <div class="hs_company hs-company hs-fieldtype-text field hs-form-field" ><label  placeholder=""><span> Company Name</span><span class="hs-form-required">*</span></label><legend class="hs-field-desc" style="display:none;"></legend><div class="input"><input class="hs-input " type="text" name="company"></div>
                         
                           </div>
                           <div class="hs_phone hs-phone hs-fieldtype-text field hs-form-field" ><label  placeholder=""><span> Phone</span><span class="hs-form-required">*</span></label><legend class="hs-field-desc" style="display:none;"></legend><div class="input"><input class="hs-input " type="tel" name="phone"></div></div>
                           </fieldset>

                           <fieldset class="form-columns-1">
                            <div class="hs_project_type_product hs-project_type_product hs-fieldtype-text field hs-form-field" ><label  placeholder=""><span> Project Type Product</span><span class="hs-form-required">*</span></label><legend class="hs-field-desc" style="display:none;"></legend><div class="input"><select class="hs-input "  name="projecttype">
                                <option value="" disabled="" selected="" >Please Select</option>
                                <option value="" >Discovery/Strategy</option>
                                <option value="1" >User Experience (UX)</option>
                                <option value="2" >Website Design</option>
                                <option value="3" >Website Development</option>
                                <option value="4" >Application Development</option>
                                <option value="5" >Mobile Apps</option>
                                <option value="6" >E-Commerce</option>
                                <option value="7" >Marketing/Advertising</option>
                                <option value="8" >Social Media</option>
                                <option value="9" >Other</option>
                            </select>
                            </select></div>
                           
                                
                        </div>
                        </fieldset>

                        <fieldset class="form-columns-1" >
                            <div class="hs_message hs-message hs-fieldtype-textarea field hs-form-field" >
                                <label  class="" placeholder="Enter your Message" ><span >Message</span>
                                <span class="hs-form-required" >*</span>
                            </label>
                            <legend class="hs-field-desc" style="display:none;" ></legend>

                            <div class="input" ><textarea  class="hs-input" name="message" required="" placeholder="" >

                            </textarea>
                        </div>
                    </div>
                </fieldset>

                <div class="hs_submit hs-submit" >
                    <div class="hs-field-desc" style="display:none;" >
                    </div><div class="actions" ><input type="submit" value="Submit" class="hs-button primary large" >
                    </div>
                </div>

                     </form>
                </div>