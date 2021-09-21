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
						<h2 class="text-black font-w600">Bulk Charges</h2>
						<p class="mb-0">Add Charges To Multiple Users</p>
					</div>
				
				</div>
				<div id="mainTable">
					<table class="customers" id="customers">
					  <tbody><tr>
						<th>Users</th>
						<th>Category</th>
						<th>Services</th>
						<th>Parsha</th>
						<th>Details</th>
						<th>Charge</th>
						<th>Charge For</th>
						<th>Notes</th>
					  </tr>
					  <tr>
						  <td>
							<select name="blogusers" class="blogusers form-control default-select">
								<option selected="" value="Select Customer">-Select Customer-</option>
								<option value="5">C. Patel</option><option value="6">Jena Trevino</option><option value="28">אברהם גראס</option><option value="105">אברהם שמעדרא</option><option value="99">אברהם שובקס</option><option value="104">אברהם חיים שמעדרא</option><option value="83">אברהם יוסף פרסטר</option><option value="109">אברהם פלטיאל פריד </option><option value="88">אהרן קארניאל</option><option value="62">אהרן לינשא</option><option value="33">אהרן (בר''מ) גראסמאן</option><option value="81">אהרן דוד פראנק</option><option value="101">אהרן יהושע שווייצער</option><option value="27">אהרן שלמה גראס</option><option value="46">אלימלך ווידער</option><option value="52">אלימלך וועטענשטיין</option><option value="110">אלימלך פראנק - יוסף ברב"צ גראס </option><option value="16">אליעזר אייזנבאך</option><option value="68">אליעזר וואלף פאדווא</option><option value="53">אליעזר יצחק זיגעלמאן</option><option value="106">אשר שמעדרא</option><option value="20">בנציון אסאראף</option><option value="9">בנציון אדלער</option><option value="11">בערל אויסטערליץ</option><option value="55">בערל זילבערמאן</option><option value="103">ברוך שליין</option><option value="48">גרשון וויינשטאק</option><option value="44">הערשל הערמאן</option><option value="95">וואלווי קליין</option><option value="65">וואלף בער לערנער</option><option value="39">זאב דייטש</option><option value="89">חיים קליין</option><option value="34">חיים אברהם גראסמאן</option><option value="70">חיים יהושע פאסטען</option><option value="61">חיים יוסף ליכטמאן</option><option value="43">חיים יעקב האפשטיין</option><option value="29">חיים יצחק גראס</option><option value="63">חיים מרדכי לערנער</option><option value="37">חיים משה גרויז</option><option value="69">יהודא אלטר פאדווא</option><option value="7">יהושע פויגל</option><option value="78">יהושע פיליפ</option><option value="32">יהושע פינחס גראס</option><option value="107">יודל שפירא</option><option value="86">יוחנן קאטצבארג</option><option value="51">יונה וועבער</option><option value="85">יוסף קאהן</option><option value="15">יוסף אונגאר</option><option value="18">יוסף איינהורן</option><option value="31">יוסף (בר''ד) גראס</option><option value="50">יוסף חיים וועבער</option><option value="25">יושע גאנצפריעד</option><option value="38">יחזקאל גרינוואלד</option><option value="10">יחיאל אדלער</option><option value="19">יעקב אליאס</option><option value="40">יעקב האכהייזער</option><option value="77">יעקב פיליפ</option><option value="75">יעקב זאב פויגל פויגל</option><option value="96">יעקב חיים קליין</option><option value="23">יצחק בערגער</option><option value="108">יצחק אייזיק שרייבער</option><option value="58">יצחק חיים יאקאב</option><option value="17">יצחק יעקב אייזנבאך</option><option value="41">יצחק צבי האכהייזער</option><option value="8">ישעיה לברון</option><option value="79">ישראל פינקלשטיין</option><option value="57">ישראל דוד זינגער</option><option value="71">מאיר פארגעס פארגעס</option><option value="42">מאיר שלום האנשטעטער</option><option value="72">מיכאל פארגעס</option><option value="26">מנחם הלל געשטעטנער</option><option value="100">מנחם מאיר שווארץ</option><option value="30">מרדכי גראס</option><option value="76">מרדכי פיליפ</option><option value="98">מרדכי ראזענגארטן</option><option value="47">מרדכי דוד וויינבערגער</option><option value="12">משה אויסטערליץ</option><option value="54">משה זיידנפעלד</option><option value="91">משה קליין</option><option value="82">משה פריעדמאן</option><option value="60">משה יוסף לאנגסאם</option><option value="35">משה שמואל גראסמאן</option><option value="45">משה שמחה הערץ</option><option value="90">משולם קליין</option><option value="59">מתתי' לאנגסאם</option><option value="111">נחום פריד </option><option value="56">נפתלי הירצקא זילבערמאן</option><option value="92">נתן קליין</option><option value="87">עקיבא קארניאל</option><option value="73">פינחס פארגעס</option><option value="64">פינחס לערנער</option><option value="102">צבי שטערנליכט</option><option value="36">צבי אלימלך גראסמאן</option><option value="80">צבי משה פעפערקארן</option><option value="74">שלום פויגל</option><option value="93">שלום קליין</option><option value="22">שלמה בוימגארטן</option><option value="13">שלמה גרשון אונגאר</option><option value="97">שלמה זלמן קרויס</option><option value="24">שלמה לייב גאלד</option><option value="14">שמואל אונגאר</option><option value="21">שמואל בארד</option><option value="49">שמחה יונה ווייס</option><option value="84">שמעון פרקש</option><option value="67">שמעון מענצער</option><option value="94">שמעון יצחק קליין</option><option value="66">שמשון מאשקאוויטש</option>        </select>
						</td>
						<td>
								<select class="service_category form-control default-select">
							<option value="Select Category">Select Category</option>
								<option value="fixed-charge">Fixed Charge</option>
								<option value="manual_charge">Non Fixed Charge</option>
							</select>
						</td>
						<td>
							<div class="services_sec"></div>
						</td>
						<td>
							<select class="parsha form-control default-select">
								<option value="Select Parsha">Select Parsha</option>
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
								
								<option value="שבת חוה" מ="" פסח="" "="">שבת חוה"מ פסח  </option>
								
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
							<select class="details form-control default-select">
								<option value="Select Details">Select Details</option>
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
							<input type="text" class="search charge_amount form-control" onkeypress="return isNumber(event)">
							</td>
						<td>
							<select class="reccur form-control default-select">
								<option valuue="Select Duration">Select Duration</option>&gt;
								<option value="2">Yearly</option>
								<option value="3">Monthly</option>
								
							</select>
						</td>
						<td><textarea class="notes form-control" cols="15"></textarea></td>
					<td><button id="insert_fixed_charge" class="btn btn-primary button-large">Insert</button></td>
					  </tr>
					  
					</tbody>
				</table>
					
					</div>
					<div id="cloneTables"></div>
					<span class="dashicons dashicons-insert" id="add"></span>
					<span class="dashicons dashicons-remove" id="remove"></span>
					

			</div>

		
		
		<!--**********************************
            Content body end
        ***********************************-->
			
@endsection