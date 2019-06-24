/* ## WAYS OF VALIDATION RULE DEFINITION

validate[required,length[0,20]]; >> lenght must be between 0 to 20.*
validate[required,confirm[password]] >> Compare two fields.. confirm[TXT_FIELD NAME]
validate[required,custom[email]] >> For Email Address
validate[required,custom[date]] >> Date in format YYYY-MM-DD
validate[required,custom[dateSlash]] >> Date in format DD/MM/YYYY

*/

(function($) {
	$.fn.validationEngineLanguage = function() {};
	$.validationEngineLanguage = {
		newLang: function() {
			$.validationEngineLanguage.allRules = 	{"required":{    			// Add your regex rules here, you can take telephone as an example
						"regex":"none",
						"alertText":"* This field is required",
						"alertTextCheckboxMultiple":"* Please select an option",
						"alertTextCheckboxe":"* This checkbox is required"},
					"length":{
						"regex":"none",
						"alertText":"*Between ",
						"alertText2":" and ",
						"alertText3": " characters allowed"},
					"maxCheckbox":{
						"regex":"none",
						"alertText":"* Checks allowed Exceeded"},	
					"minCheckbox":{
						"regex":"none",
						"alertText":"* Please select ",
						"alertText2":" options"},	
					"confirm":{
						"regex":"none",
						"alertText":"* Your password is not matching"},		
					"telephone":{
						"regex":"/^[0-9\-\(\)\ ]+$/",
						"alertText":"* Invalid telephone number"},	
					"mobile":{
						"regex":"/^[0-9\-\(\)\ ]+$/",
						"alertText":"* Invalid mobile number"},	
					"fax":{
						"regex":"/^[0-9\-\(\)\ ]+$/",
						"alertText":"* Invalid fax number"},	
					"email":{
						"regex":"/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/",
						"alertText":"* Invalid email address"},	
					"date":{
                         "regex":"/^[0-9]{4}\-\[0-9]{1,2}\-\[0-9]{1,2}$/",
                         "alertText":"* Invalid date, must be in YYYY-MM-DD format"},
					"dateSlash":{
                         "regex":"/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/",
                         "alertText":"* Invalid date, must be in DD/MM/YYYY format"},
					"onlyNumber":{
						"regex":"/^[0-9\ ]+$/",
						"alertText":"* Numbers only"},	
					"noSpecialCaracters":{
						"regex":"/^[0-9a-zA-Z]+$/",
						"alertText":"* No special caracters allowed"},	
					"ajaxUser":{
						"file":"includes/helpers/validateUser.php",
						"extraData":"name=eric",
						"alertTextOk":"* This user is available",	
						"alertTextLoad":"* Loading, please wait",
						"alertText":"* This user is already taken"},	
					"ajaxProduct":{
						"file":"includes/helpers/validateProduct.php",
						"alertText":"* This product Id is already taken",
						"alertTextOk":"* This Id is available",	
						"alertTextLoad":"* Loading, please wait"},		
					"onlyLetter":{
						"regex":"/^[a-zA-Z\ \']+$/",
						"alertText":"* Letters only"}
					}	
		}
	}
})(jQuery);

$(document).ready(function() {	
	$.validationEngineLanguage.newLang()
});