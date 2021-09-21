{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')


		<!--**********************************
            Content body start
        ***********************************-->
		<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Guest User</h2>
						<p class="mb-0">Add Guest User</p>
					</div>
				
				</div>
				<table id="customers">
					<tbody><tr>
					  <th>Users</th>
					  <!--<th>Category</th>-->
					  <th>Services</th>
					  <th>Parsha</th>
					  <th>Details</th>
					  <th>Charge</th>
					  <th>Notes</th>
					  <th></th>
					</tr>
					<tr>
						  <td>
						  <select class="form-control form-control-lg default-select" name="blogusers" id="blogusers">
							  <option value="119">testguest</option>        </select>
					  </td>
						  <!--<td>-->
							  
										  
						  <!--<select name="service_category" id="service_category">-->
						  <!--    <option value="" disabled="true" selected="">Please Select Category</option>-->
						  <!--    <option value="manual_charge">Manually charges</option>-->
						  <!--</select>-->
					  <!--</td>-->
						  <td>
						  <div id="services_sec">
							  <select class="form-control form-control-lg default-select" name="services" id="services">
							  <option>Select service</option><option value="372" data-price="">דמי סעודה</option><option value="371" data-price="">פרנס השנה – נר למאור</option><option value="370" data-price="">פרנב החודש – נר למאור</option><option value="369" data-price="101">פרנס השבוע – נר למאור</option><option value="368" data-price="">פרנס היום – נר למאור</option><option value="367" data-price="">פרנס השנה – קאווע</option><option value="366" data-price="">פרנב החודש – קאווע</option><option value="365" data-price="">פרנס השבוע – קאווע</option><option value="364" data-price="">פרנס היום – קאווע</option><option value="363" data-price="">מי שבירך</option><option value="362" data-price="">עלייה חיוב</option><option value="361" data-price="">קנה עלייה</option><option value="360" data-price="">קווה</option><option value="359" data-price="">מי חבר</option><option value="245" data-price="100">Swimming</option><option value="244" data-price="30">Gym</option><option value="243" data-price="400">Banquet</option><option value="242" data-price="15.45">Library</option><option value="241" data-price="11">Wifi</option><option value="240" data-price="10">Parking</option>            </select>
						  </div>
					  </td>
						  <td>
						  <select class="form-control form-control-lg default-select" id="parsha">
							  <option>Parsha</option>
							  <option value=" פרשת בראשית ">פרשת בראשית  </option>
				  
							  <option value=" פרשת נח ">פרשת נח  </option>
							  
							  <option value=" פרשת לך לך ">פרשת לך לך  </option>
							  
							  <option value=" פרשת וירא ">פרשת וירא  </option>
							  
							  <option value=" פרשת חיי שרה ">פרשת חיי שרה  </option>
							  
							  <option value=" פרשת תולדות ">פרשת תולדות  </option>
							  
							  <option value=" פרשת ויצא ">פרשת ויצא  </option>
							  
							  <option value=" פרשת וישלח ">פרשת וישלח  </option>
							  
							  <option value=" פרשת וישב ">פרשת וישב  </option>
							  
							  <option value=" פרשת מקץ ">פרשת מקץ  </option>
							  
							  <option value=" רשת ויגש   ">פרשת ויגש  </option>
							  
							  <option value=" רשת ויחי   ">פרשת ויחי  </option>
							  
							  <option value=" רשת שמות   ">פרשת שמות  </option>
							  
							  <option value=" רשת וארא   ">פרשת וארא  </option>
							  
							  <option value=" רשת בא   ">פרשת בא  </option>
							  
							  <option value=" רשת בשלח   ">פרשת בשלח  </option>
							  
							  <option value=" רשת יתרו   ">פרשת יתרו  </option>
							  
							  <option value="רשת משפטים  ">פרשת משפטים  </option>
							  
							  <option value="פרשת תרומה  ">פרשת תרומה  </option>
							  
							  <option value="פרשת תצוה  ">פרשת תצוה  </option>
							  
							  <option value="פרשת כי תשא  ">פרשת כי תשא  </option>
							  
							  <option value="פרשת ויקהל  ">פרשת ויקהל  </option>
							  
							  <option value="פרשת פקודי ">פרשת פקודי </option>
							  
							  <option value="פרשת ויקרא  ">פרשת ויקרא  </option>
							  
							  <option value="פרשת צו  ">פרשת צו  </option>
							  
							  <option value="פרשת שמיני  ">פרשת שמיני  </option>
							  
							  <option value="פרשת תזריע  ">פרשת תזריע  </option>
							  
							  <option value="פרשת מצרע  ">פרשת מצרע  </option>
							  
							  <option value="פרשת אחרי מות  ">פרשת אחרי מות  </option>
							  
							  <option value="פרשת קדשים  ">פרשת קדשים  </option>
							  
							  <option value="פרשת אמר  ">פרשת אמר  </option>
							  
							  <option value="פרשת בהר סיני  ">פרשת בהר סיני  </option>
							  
							  <option value="פרשת בחקתי  ">פרשת בחקתי  </option>
							  
							  <option value="ספר במדבר  ">ספר במדבר  </option>
							  
							  <option value="פרשת במדבר  ">פרשת במדבר  </option>
							  
							  <option value="פרשת נשא  ">פרשת נשא  </option>
							  
							  <option value="פרשת בהעלתך  ">פרשת בהעלתך  </option>
							  
							  <option value="פרשת שלח  ">פרשת שלח  </option>
							  
							  <option value="פרשת קרח  ">פרשת קרח  </option>
							  
							  <option value="פרשת חקת  ">פרשת חקת  </option>
							  
							  <option value="פרשת בלק  ">פרשת בלק  </option>
							  
							  <option value="פרשת פינחס  ">פרשת פינחס  </option>
							  
							  <option value="פרשת מטות  ">פרשת מטות  </option>
							  
							  <option value="פרשת מסעי  ">פרשת מסעי  </option>
							  
							  <option value="פרשת דברים  ">פרשת דברים  </option>
							  
							  <option value="פרשת ואתחנן  ">פרשת ואתחנן  </option>
							  
							  <option value="פרשת עקב  ">פרשת עקב  </option>
							  
							  <option value="פרשת ראה  ">פרשת ראה  </option>
							  
							  <option value="פרשת שפטים  ">פרשת שפטים  </option>
							  
							  <option value="פרשת כי תצא  ">פרשת כי תצא  </option>
							  
							  <option value="פרשת כי תבוא  ">פרשת כי תבוא  </option>
							  
							  <option value="פרשת נצבים  ">פרשת נצבים  </option>
							  
							  <option value="פרשת וילך  ">פרשת וילך  </option>
							  
							  <option value="פרשת האזינו  ">פרשת האזינו  </option>
							  
							  <option value="פרשת וזאת הברכה  ">פרשת וזאת הברכה  </option>
							  
							  <option value="א' דפסח  ">א' דפסח  </option>
							  
							  <option value="ב' דפסח  ">ב' דפסח  </option>
							  
							  <option value="שבת חוה" מ="" פסח="" >שבת חוה"מ פסח  </option>
							  
							  <option value="שביעי של פסח  ">שביעי של פסח  </option>
							  
							  <option value="אחרון של פסח  ">אחרון של פסח  </option>
							  
							  <option value="א' שבועות  ">א' שבועות  </option>
							  
							  <option value="ב' שבועות  ">ב' שבועות  </option>
							  
							  <option value="א' דראש השנה  ">א' דראש השנה  </option>
							  
							  <option value="ב' דראש השנה  ">ב' דראש השנה  </option>
							  
							  <option value=" יום כיפור  "> יום כיפור  </option>
							  
							  <option value="א' דסוכות  ">א' דסוכות  </option>
							  
							  <option value="ב' דסוכות  ">ב' דסוכות  </option>
							  
							  <option value="שבת חוה" מ="" סוכות="" "="">שבת חוה"מ סוכות  </option>
							  
							  <option value="שמיני עצרת  ">שמיני עצרת  </option>
							  
							  <option value="שמחת תורה  ">שמחת תורה  </option>
							  
							  <option value="תשרי  ">תשרי  </option>
							  
							  <option value="חשוון  ">חשוון  </option>
							  
							  <option value="כסלו  ">כסלו  </option>
							  
							  <option value="טבת  ">טבת  </option>
							  
							  <option value="שבט  ">שבט  </option>
							  
							  <option value="אדר א  ">אדר א  </option>
							  
							  <option value="אדר ב'  ">אדר ב'  </option>
							  
							  <option value="ניסן  ">ניסן  </option>
							  
							  <option value="אייר  ">אייר  </option>
							  
							  <option value="סיוון  ">סיוון  </option>
							  
							  <option value="תמוז  ">תמוז  </option>
							  
							  <option value="אב  ">אב  </option>
							  
							  <option value="אלול  ">אלול  </option>
				  
						  </select>
					  </td>
					  <td>
						  <select class="form-control form-control-lg default-select" id="details">
							  <option>Select Details</option>
							  <option value="וצאה והכנסה  ">הוצאה והכנסה  </option>
							  <option value="הן  ">כהן  </option>
							  <option value="וי  ">לוי  </option>
							  <option value="לישי  ">שלישי  </option>
							  <option value="ביעי  ">רביעי  </option>
							  <option value="מישי  ">חמישי  </option>
							  <option value="ישי  ">שישי  </option>
							  <option value="ביעי  ">שביעי  </option>
							  <option value="חרון  ">אחרון  </option>
							  <option value="פטיר  ">מפטיר  </option>
							  <option value="וספה  ">הוספה  </option>
							  <option value="גבה גלילה  ">הגבה גלילה  </option>
						  </select>
					  </td>
					  
						  <td>
							  <input type="text" id="charge_amount" class="search form-control" onkeypress="return isNumber(event)">
						  </td>
						  <td><textarea class="form-control" id="notes" cols="15"></textarea></td>
						  <td>
							  <button id="insert_fixed_charge" class="btn btn-primary">Insert</button>
						  </td>
					</tr>
				  </tbody></table>
			</div>
		<!--**********************************
            Content body end
        ***********************************-->
			
@endsection