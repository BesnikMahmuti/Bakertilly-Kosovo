<?php /* Template Name: Contact */

  get_header();
  $languages = pll_the_languages( array("raw" => 1) );		
 ?>
   <main class="main">
      <section class="banner" style="background: url(/wp-content/themes/bakertilly/img/img-banner2.jpg);"></section>
      <div class="content cont">
        <div class="wrap">
          <h1><?php if (pll_current_language() == "en"){echo 'Contact';}else{ echo 'Na kontaktoni';} ?></h1>
          <p><?php if (pll_current_language() == "en"){echo 'For any enquiries about specific services or if you are interested in a career with Baker Tilly Kosovo, please contact at:';}else{echo 'Për pyetjet lidhur me shërbimet tona ose nëse jeni i interesuar për karierë në Baker Tilly Kosovo, ju lutem na kontaktoni në: ';}?></p>
        </div>
      </div>
	   <div class="location">
        <div class="wrap">
          <div class="location-content">
            
            <div class="location-country">
              <div class="country-adr">
				<?php 
				  	if (pll_current_language() == "en"){
					echo 'Baker Tilly Kosovo  <br>
						Sejdi Kryeziu 15, Pejton<br>
						Floor 3 <br>
						10000 Prishtina Kosovo <br>
						Tel: +381 38 60 90 60 <br>
						info@bakertillyks.com';
					}else{
						echo 'Baker Tilly Kosovo
						Sejdi Kryeziu 15, Lagjja Pejton<br>
						Kati 3 <br>
						10000 Prishtinë Kosovë <br>
						Tel: +381 38 60 90 60 <br>
						info@bakertillyks.com';
					}
				?>
              </div>
              
            </div>
          </div>
          <div class="location-sidebar">
            <div class="heading-title">
              <h2><?php if (pll_current_language() == "en"){ echo 'LOCATION';}else{echo 'Lokacioni';} ?></h2>
            </div>   
			<div class="maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8031.483733425895!2d21.156419651771397!3d42.655586001981256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2de15961bb9db522!2sBaker+Tilly+Kosovo!5e1!3m2!1sen!2s!4v1543312527758" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  </div>
          </div>
		</div>
	</div>
    </main>
    <section class="section form-area gray-bg">
      <div class="wrap">
        <div id="umbraco_form_c934731a2c36438fb7181540294007a3" class="umbraco-forms-form becomeamember umbraco-forms-">
			<?php echo do_shortcode('[contact-form-7 id="583" title="Contact form Bakertilly"]')?>
          <!--<form action="#" enctype="multipart/form-data" method="post">
            <input name="__RequestVerificationToken" type="hidden" value="pBTZPKXuB8gvkzzM5cvm9FpsjmDlNrQgXZWPozt1Y6LV7z7Y8KWKYceqEz76l6mgICh0IHsF1af9d9TXjrknODhXO3jpLwNAjksl1P0E4CY1"><input data-val="true" data-val-required="The FormId field is required." id="FormId" name="FormId" type="hidden" value="c934731a-2c36-438f-b718-1540294007a3">
            <input id="FormName" name="FormName" type="hidden" value="Become a member">
            <input data-val="true" data-val-required="The RecordId field is required." id="RecordId" name="RecordId" type="hidden" value="00000000-0000-0000-0000-000000000000">
            <input id="PreviousClicked" name="PreviousClicked" type="hidden" value="">
            <input type="hidden" name="FormStep" value="0">
            <input type="hidden" name="RecordState" value="NTA0RjkwOEEwMUIwREQ3OTJGMEJFQzBBNkRFODdGRkI2MzFFQzE3OTU3REQ3NzM0NThCREM1QzFCNzU4MDAxMDYxMjdFOURGOTQ5NTY5QkVCNTlCQjcyOUE5MEJBNTI0RjI3Q0UyMzdFMTdFMTVDNEFEQTI3ODZGMzAwMkNDNjY3RjNDNjM4RkI2QTU3OUVCQzU0NkZEQTRFMzVBQzZBOUNGQzgyMjk5NjY1OTgxMDc0RTI1RkFEOERFRjE5NTUyMzE5NUNEQzM4NDE5QjczMURBOUY4QkI5ODUxOEFCMUVGNjFFNDVEMkQ0QjdBNTQ2NDc2MkFENUI4QkNBNDhFODhGM0JDMEFENzQ4OTYxNjMzODE0MENCNDJBMjU0Q0IwRDUzNEVENDEwQThGOTYzNTZEMDE4Qjk5RUNGN0U3RkZCNkVEMDhENTUyODA3Nzg2OTZDNURBQzdEMDFERTRDQThCQzQ5NTc4MkQ5MUJGMzNCREUwNjQyMEE0RTg5NUJCRTcyRUI2OTcwOTNGNTE3REJDQ0Q0RDMxQjgwMDQ2NDNCMkRGNkUxMEU2QjNBQzZDQzQwMTU3Nzg5NzkwMDE3MDEyMEFFNkE5NEUxOTc3QkVGOTkyRTg5MzQ0QjAxODkwNERBODhBNEI4QjFDRUNBNzgyRUUwQzg3QTU4NUEwQ0MyQkYyQjJCODA1MzkzMDBDM0ExQ0ZDQ0FCMUQwNjlBQTA2MzlFQjBBNDQ2NDg2QjMzNUZFNUVFODBFRTY0QzI4RDI1MUMzMjEwRDhCMTEyQUUxQ0FFNzE4QzcwNEU2NEJFQTY3NTZDOUVGMkY4OUEyOUEwODIyMzcwRUQ0QTA3NzlFMDM3MkIwMUVBMDNDQ0Q0MzcyNEFCMTU3RjQ4Mjk0MkY4QTM5MjdCMjYyRkJFNEZEQkU5RjdCOTlBNEU3QkQ2MERDQjQxMDYzRUIwRDYzQUU1OEIzNUVCQkZBMEFBRjlFQjFEOTk5QzQyMENFNTU3RUNEOEVDOEI1MDk3N0E0N0U5QzUwMEJEMEFBOThGQjk1Qzc2NDFDNkE3MzQ4RTlBOTdGNTI4NkZBM0VCMzFDNDYxNzkxRjE4MEFEMUQ5QUQxMzA4MTlGMzc4QTU0QUIwQjVBN0FFRjE2NTJEODQyQjc5NzBDNkMwNUZDODVEMjE0QkM2RjE5MkQ0MTRBODZDN0EyMkQ3OTQ4MzE3RURENTQ1MDk1OUNCMjQxNDE5OTk3NTAwNjQzQUU1OTRBQTVERTJERDY5NDc0RDhBRkQ5MDY2OTE0MTlBMjBCQkU3ODJBMTI1NzgxMzkxNTY4QkY5QThBOUY5Q0I5OERDMTExNkVGQjk1NDQwNDM1MDY2MDUxQjU2QTM2RTgzNDI1NzQ0MEVEMkZBMkRBMTk4RDZDQkExMjI0QjExQUU4RTJFM0M3NTVBNUU3ODIxOThCNzg5ODVFREVBOEMxMTk1OTdEMDdBODUzQTdFRDBDQzM5NjcyREI2RjY3MDU3OEI4RDVGQzI3Nzk5RTU0MzQ1NjAwNDg3NkUwNjc5REZCNjNBNkNGOUFEQUQxQUIzQTg4OTYwNDc0Mzk1MDcwNzMxNEEyNDY2NjUwRTI0RUEwMzMyN0NGODBGMUI3QzRCQTM5NUM3QjU2RUZCMzNERDNDRTUyRDE3RkJGNjA3RjAxQjJBNUE1MkRFMTNDRDZBREE4QjczQkRDQjU5NEVEOUE0NDgzMDdERTVBNjQ3NTIwMkUzQjU4MzE2RDBDRTQ2NkQ2RjNBRTQ5MEFENDAxQjcwQzQ2MTE4RTZEMDk4QzhCRERENzUxQ0YzREEyNUE2MEVBMzUyOTgzMEE4QTZEQ0ZBRTY4MjdFMEQ5ODRCRjhCMEEwRDIzOTQ2RUYzNThEMTcxRjM3NkQxQUI1QkEyNDIzNUE3RDI4QUQ2RTE2RUZEQzcxQjA1NjdDQzYxM0FENkE4MTk5OTcxQzM5MTk4RjY2QjFGRjYxQjEzNjIwQjlEOTA1RTlGNjMwRDlFMDA0NEUxQTU3ODcxREM2MTdEOUFGNzI5Qjk3Q0QyMEJDNURFOUQ2N0FBQkNFRTM4NTg5MEE5M0M5REI5QzIxRDBFMDJEMjlBQjM5NzA2RUNBOTQ5NDVERUJDMTI1RTA0QkQwOThFQUY5RTcwMjgxNkIwQTg4OTgyNTc1NDI5NTg1QTY3RjU1QTI1RUNDOTZDMjg2NEY3QTIwRjFGREYyMzVFQ0FBNDJDRjg3MTQyNTUwQzQ4MDM4MUY3NEJEOENERTRCQjg5RUE4QThEREZGMjRENzBFM0M0OEExNTNGQUJBMTYxOTAzRjg0RjA4MjM2MkYyOTNCNkZDMTcyNDMzNEY0RTc3QkQ4MkMxQzU2RUExNEI4NzNDNUVCOUExMkQyNjI1NDMzNTgxQjk0RUE0NkE1RDE4MzEyQzI3QTYzQjBDQTRCNEUyMjExRTY0QzU4MjcyMzdBRDc5OEU4NjI2OEJBMDUxRkVDQTIzNEFFQ0FEODc5RTUyREYwN0RENzUzODg0RTkxRDY0RjYyOEU4NzAxQ0I5M0E5RTUyM0MxMzFEMUM3OTIzMjNBRkNERTNDMkE1NzlFOUM5OERFRDIxOTk4OTRCNTI1QkFFMTJEQ0U4MTY1NzA3QzAxOTJCQkU0OUFCQjg0NkFDRThBQjQyRjBBMTU0M0M2NjlERDA4ODQ0QkJFNTY3MzdCNkU5QUVBMDNCRDlDMkZBREJEMjU1QjY0NTM4RTI2REJEMjE2QjFBMzBBRkIzQ0E5MEI0MUZEMkYyRDgxNENFQUY0MTE2RDEwNkM5OUI0REFBN0I0OUQxRUIyM0Y1NDA1N0IwQjlCODUwNzE1NDYwNjk3RkZBNkIxNzUzOTdCMDgyMTgxMkQ1OTVCQUEyRA0KQTE4MEVEQzU2M0U5NzYyMjE4NUVENkMwQTlBNDZBQzE1MDgyREFFNTQ2ODFENjIwQ0ZEM0U2RjJEQjdBQzUxRjRFN0EzREEwRDhCOTU1MkE1OTZDNTBERjIzNjIxQ0RDQjUyNEI3MkM0QTUzNThGRjk2MEU0MDUyMzk5RTc1Q0ZGRjQ4RUEzMzNCRDI1M0IxRkI0M0Y2NDQzN0NBMUZGNDBBMkFEMkZERDlFMzM4QTY1N0E5MUU3NUVBMjY4MkYzNkFCRjA1MTg4RENEMjk0MjU1REQxRDEyMkJBMUI2RkYxMkExOEY1NzM2MzkwMUE5NUUwMEREQzZFQjYxNEI3MUVEMTdBMjI4MEJGRTU2N0MwOTEwNkYxNDZDREM0MzMwMjc4OUVGREY5NzhBRTBFNThDM0I2OEE4RUVGMTExMzE2MTE3QjdGNzkzMkQ1OTIzNUE0ODVGRjE3QjFCQ0Y1OUE5M0VFQkFCNThEMjYzRkNENTcxRjM0RjE1MzZEQUVDOTg1Q0M0RUUxRDVEQUZGMzU4MzNEODBBQUI2OUJDNkI3QjdEMkU5RTNENjM3RUNBREZFODk0MDBFODYzNkU3NjI0NENDNTIwRTRFMDBFRkE5NUI2NjdGOTM4M0U4M0FEOUY4Q0YxQTM4N0U4RDk3NERCRkJFQThFQjZFQzlBMDk4MEUyNkIxNzAxOEYzMkM4MTNBQUIwOUJBQzg3MzQyNkE2NDJGODhFRTQ2REU2Q0I0NjQ1MUYwRjI0MjY5OEJBMTU4OERGQ0RFMjE0Q0NGRjlERTY1MEVCMjE4OUQyRjlGRDBGRDhFNzZCMkY4Mzk3QkIyNUUxM0RENEMwQzBERDBEMzVDNDFDNzNBNTE1RjlFNzI2NEFDRjc1OThFQjY4RDA1OTRENEE1NTlFN0RERkZERDc2RDAwRDVCQzdDOTAwOTc1RUYzQjExRjNBODMyQzRCRkFBOTExMTAxMEFFRTlGODk2OUQ0Rjk5NTRFNjAyNjBEMkU0OTRCNDNGQkQyQ0JCODJEMzc0QUI5MUY3QTYzNzVDNUFFNUQwNjdCQTI1REE2RTk3QTk2QzkwRDk5QTVFN0NEQzExNEVFRkVBQTFBMzI2MTBGMjc4RkVBQkJENUNCRTBEQkI2NjUxQjY5">

            <div class="umbraco-forms-page">
              <fieldset class="umbraco-forms-fieldset" id="f74d6f60-23d8-4af0-926b-1f3283e5aa16">
                <div class="row-fluid">
                  <div class="umbraco-forms-container">
                    <div class=" umbraco-forms-field firstname perplextextfield mandatory">
                      <div class="umbraco-forms-field-wrapper error">
                        <input type="text" name="de21e75a-2770-4e78-e194-00d87de754fb" id="de21e75a-2770-4e78-e194-00d87de754fb" class="text" value="" maxlength="255" placeholder="<?php if (pll_current_language() == "en"){echo
	'First Name';}else{echo 'Emri';} ?>" data-val="true" data-val-required="Requeired">
                        <span class="field-validation-valid" data-valmsg-for="de21e75a-2770-4e78-e194-00d87de754fb" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class=" umbraco-forms-field lastname perplextextfield mandatory alternating">
                      <div class="umbraco-forms-field-wrapper">
                        <input type="text" name="e29b8378-8e91-43b1-ce05-eade41f8335c" id="e29b8378-8e91-43b1-ce05-eade41f8335c" class="text" value="" maxlength="255" placeholder="<?php if (pll_current_language() == "en"){echo 'Last Name';}else{echo 'Mbiemri';}?>" data-val="true" data-val-required="Required">
                        <span class="field-validation-valid" data-valmsg-for="e29b8378-8e91-43b1-ce05-eade41f8335c" data-valmsg-replace="true"></span>
                      </div>
                    </div>

                    <div class=" umbraco-forms-field email perplextextfield mandatory">
                      <div class="umbraco-forms-field-wrapper">
                        <input type="email" name="fcc1bdb2-83f9-436f-c8ce-408cfad95dbd" id="fcc1bdb2-83f9-436f-c8ce-408cfad95dbd" class="text" value="" maxlength="255" placeholder="Email" data-val="true" data-val-required="Please provide a value for Email">
                        <span class="field-validation-valid" data-valmsg-for="fcc1bdb2-83f9-436f-c8ce-408cfad95dbd" data-valmsg-replace="true"></span>
                      </div>
                    </div>                    

                    <div class=" umbraco-forms-field contactnumber perplextextfield">
                      <div class="umbraco-forms-field-wrapper">
                        <input type="tel" name="c6136fd9-5107-4a05-9867-85011bbb2359" id="c6136fd9-5107-4a05-9867-85011bbb2359" class="text" value="" maxlength="255" placeholder="<?php if (pll_current_language() == "en"){echo 'Contact';}else{echo 'Numëri kontaktues';}?>" number>
                        <span class="field-validation-valid" data-valmsg-for="c6136fd9-5107-4a05-9867-85011bbb2359" data-valmsg-replace="true"></span>
                        <span class="error-message">Optional</span>
						</div>
                    </div>

                    <div class=" umbraco-forms-field company perplextextfield alternating">
                      <div class="umbraco-forms-field-wrapper">
                        <input type="text" name="8f21b7f5-a08c-4040-8af2-35e73253e22a" id="8f21b7f5-a08c-4040-8af2-35e73253e22a" class="text" value="" maxlength="255" placeholder="<?php if (pll_current_language() == "en"){ echo 'Company';}else{echo 'Kompania';}?>">
                        <span class="field-validation-valid" data-valmsg-for="8f21b7f5-a08c-4040-8af2-35e73253e22a" data-valmsg-replace="true"></span>
                      	<span class="error-message">Optional</span>
					  </div>
                    </div>                    

                    <div class=" umbraco-forms-field message perplextextarea alternating">
                      <div class="umbraco-forms-field-wrapper">
                        <textarea name="c7e72f33-d09a-4eb3-bf76-f45a44761305" id="c7e72f33-d09a-4eb3-bf76-f45a44761305" rows="2" cols="20" maxlength="270" placeholder="<?php if (pll_current_language() == "en"){echo 'Message';}else{echo 'Mesazhi';}?>"></textarea>
                        <span class="field-validation-valid" data-valmsg-for="c7e72f33-d09a-4eb3-bf76-f45a44761305" data-valmsg-replace="true"></span>
                      </div>
                    </div>

                    <!-- <div class=" umbraco-forms-field upload perplexfileupload">
                      <label for="a8d63678-e645-4390-b157-f69aae14b843" class="umbraco-forms-label">
                      Upload                                     </label>
                      <div class="umbraco-forms-field-wrapper">
                        <input type="file" name="a8d63678-e645-4390-b157-f69aae14b843" id="a8d63678-e645-4390-b157-f69aae14b843">
                        <span class="field-validation-valid" data-valmsg-for="a8d63678-e645-4390-b157-f69aae14b843" data-valmsg-replace="true"></span>
                      </div>
                    </div>

                    <div class=" umbraco-forms-field date date alternating">
                      <label for="7fe1bb96-101a-47cb-eb75-deec5d7b87bf" class="umbraco-forms-label">
                      Date</label>
                      <div class="umbraco-forms-field-wrapper">
                        <input type="hidden" name="7fe1bb96-101a-47cb-eb75-deec5d7b87bf" id="7fe1bb96-101a-47cb-eb75-deec5d7b87bf" class="datepickerfieldshadow" value="">
                        <input type="text" class=" text datepickerfield" name="7fe1bb96-101a-47cb-eb75-deec5d7b87bf" id="7fe1bb96-101a-47cb-eb75-deec5d7b87bf_1" value="">
                        <span class="field-validation-valid" data-valmsg-for="7fe1bb96-101a-47cb-eb75-deec5d7b87bf" data-valmsg-replace="true"></span>
                      </div>
                    </div>

                    <div class=" umbraco-forms-field checkbox checkbox">
                      <label for="59e8859a-710b-405a-fcf2-b5047a55844c" class="umbraco-forms-label">
                      Checkbox</label>
                      <div class="umbraco-forms-field-wrapper">
                        <input type="checkbox" name="59e8859a-710b-405a-fcf2-b5047a55844c" id="59e8859a-710b-405a-fcf2-b5047a55844c" class="">
                        <span class="field-validation-valid" data-valmsg-for="59e8859a-710b-405a-fcf2-b5047a55844c" data-valmsg-replace="true"></span>
                      </div>
                    </div>

                    <div class=" umbraco-forms-field multiplechoice multiplechoice alternating">
                      <label for="396314e3-fcf0-4917-d272-88a5d1612603" class="umbraco-forms-label">
                      Multiple choice</label>
                      <div class="umbraco-forms-field-wrapper">
                        <span class="checkboxlist" id="396314e3-fcf0-4917-d272-88a5d1612603">
                          <input type="checkbox" class="" name="396314e3-fcf0-4917-d272-88a5d1612603" id="396314e3-fcf0-4917-d272-88a5d1612603_0" value="1">
                          <label for="396314e3-fcf0-4917-d272-88a5d1612603_0">1</label>
                          <br>
                          <input type="checkbox" class="" name="396314e3-fcf0-4917-d272-88a5d1612603" id="396314e3-fcf0-4917-d272-88a5d1612603_1" value="2">
                          <label for="396314e3-fcf0-4917-d272-88a5d1612603_1">2</label>
                          <br>
                          <input type="checkbox" class="" name="396314e3-fcf0-4917-d272-88a5d1612603" id="396314e3-fcf0-4917-d272-88a5d1612603_2" value="3">
                          <label for="396314e3-fcf0-4917-d272-88a5d1612603_2">3</label>
                          <br>
                        </span>
                        <span class="field-validation-valid" data-valmsg-for="396314e3-fcf0-4917-d272-88a5d1612603" data-valmsg-replace="true"></span>
                      </div>
                    </div>

                    <div class=" umbraco-forms-field dataconsent dataconsent">
                      <label for="784621ea-a2ea-4229-8b24-bf89fa7718a2" class="umbraco-forms-label">
                      Data Consent</label>
                      <div class="umbraco-forms-field-wrapper">
                        <div class=" radiobuttonlist dataconsent" id="784621ea-a2ea-4229-8b24-bf89fa7718a2">
                          <input type="radio" name="784621ea-a2ea-4229-8b24-bf89fa7718a2" id="784621ea-a2ea-4229-8b24-bf89fa7718a2_Accept" value="accepted">
                          <label for="784621ea-a2ea-4229-8b24-bf89fa7718a2_Accept">yes</label>
                          <br>
                          <input type="radio" name="784621ea-a2ea-4229-8b24-bf89fa7718a2" id="784621ea-a2ea-4229-8b24-bf89fa7718a2_Decline" value="declined">
                          <label for="784621ea-a2ea-4229-8b24-bf89fa7718a2_Decline">no</label>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="784621ea-a2ea-4229-8b24-bf89fa7718a2" data-valmsg-replace="true"></span>
                      </div>
                    </div>

                    <div class=" umbraco-forms-field dropdown dropdown alternating">
                      <label for="8dfb1c80-6cc3-40cc-c4f8-4336dc312806" class="umbraco-forms-label">
                      Dropdown</label>
                      <div class="umbraco-forms-field-wrapper">
                        <select class="" name="8dfb1c80-6cc3-40cc-c4f8-4336dc312806" id="8dfb1c80-6cc3-40cc-c4f8-4336dc312806">
                          <option value=""></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                        <span class="field-validation-valid" data-valmsg-for="8dfb1c80-6cc3-40cc-c4f8-4336dc312806" data-valmsg-replace="true"></span>
                      </div>
                    </div>

                    <div class=" umbraco-forms-field singlechoice singlechoice">
                      <label for="aa49b9b0-a3c9-407b-c76c-9a00df460d37" class="umbraco-forms-label">
                      Single choice</label>
                      <div class="umbraco-forms-field-wrapper">
                        <div class="  radiobuttonlist" id="aa49b9b0-a3c9-407b-c76c-9a00df460d37">
                          <input type="radio" name="aa49b9b0-a3c9-407b-c76c-9a00df460d37" id="aa49b9b0-a3c9-407b-c76c-9a00df460d37_0" value="1">
                          <label for="aa49b9b0-a3c9-407b-c76c-9a00df460d37_0">1</label>
                          <br>
                          <input type="radio" name="aa49b9b0-a3c9-407b-c76c-9a00df460d37" id="aa49b9b0-a3c9-407b-c76c-9a00df460d37_1" value="2">
                          <label for="aa49b9b0-a3c9-407b-c76c-9a00df460d37_1">2</label>
                          <br>
                          <input type="radio" name="aa49b9b0-a3c9-407b-c76c-9a00df460d37" id="aa49b9b0-a3c9-407b-c76c-9a00df460d37_2" value="3">
                          <label for="aa49b9b0-a3c9-407b-c76c-9a00df460d37_2">3</label>
                          <br>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="aa49b9b0-a3c9-407b-c76c-9a00df460d37" data-valmsg-replace="true"></span>
                      </div>
                    </div>

                    <div class=" umbraco-forms-field titleanddescription titleanddescription alternating">
                      <div class="umbraco-forms-field-wrapper">
                        <div id="547a6f7a-8cdd-4ac2-8852-95040b37fd87" class="">
                          <h2>Title</h2>
                          <p>description</p>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="547a6f7a-8cdd-4ac2-8852-95040b37fd87" data-valmsg-replace="true"></span>
                      </div>
                    </div> 
                  </div>
                </div>
              </fieldset>
              <div style="display: none">
                <input type="text" name="c934731a2c36438fb7181540294007a3">
              </div>
              <div class="umbraco-forms-navigation row-fluid">
                <input type="submit" class="btn primary" value="<?php if (pll_current_language() == "en"){ echo'Submit';}else{echo 'Dërgo';}?>" name="__next">
              </div>
            </div>
            <input name="ufprt" type="hidden" value="5996B91916A980CB8BCA6274B4EB828D634788CD098CAF2D47C43FCB7089AF53A8950CDD4E96F054F4620C2D8701A3ABD6BDA1CB78BB6356EEA7C9295E7943C9970A95EA2DE009AEA63557546FD06A11BAF06DFA0B433D3DFE0E0F128D83153B46DFD3FA00C63856C54436E19F9831E364CE52880AD5AA02E2F1ED723E4794C3560348D1235788E1EB8956D7F7BD7F5A">
          </form>-->
        </div>
      </div>
    </section>
	
<?php get_footer(); ?>