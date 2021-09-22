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
						<h2 class="text-black font-w600">Manual Payments</h2>
					
					</div>
				
				</div>
				<table id="customers">
					<tbody><tr>
					  <th>Users</th>
					</tr>
					<tr>
						<td>
						  <select class="form-control form-control-lg default-select" name="blogusers" id="blogusers">
							  <option selected="">---Select Customer---</option>
							  <option value="5">C. Patel</option><option value="1">Chetan Patel</option><option value="4">Harsh Shah</option><option value="6">Jena Trevino</option><option value="119">Test test</option><option value="28">אברהם גראס</option><option value="105">אברהם שמעדרא</option><option value="99">אברהם שובקס</option><option value="104">אברהם חיים שמעדרא</option><option value="83">אברהם יוסף פרסטר</option><option value="109">אברהם פלטיאל פריד </option><option value="88">אהרן קארניאל</option><option value="62">אהרן לינשא</option><option value="33">אהרן (בר''מ) גראסמאן</option><option value="81">אהרן דוד פראנק</option><option value="101">אהרן יהושע שווייצער</option><option value="27">אהרן שלמה גראס</option><option value="46">אלימלך ווידער</option><option value="52">אלימלך וועטענשטיין</option><option value="110">אלימלך פראנק - יוסף ברב"צ גראס </option><option value="16">אליעזר אייזנבאך</option><option value="68">אליעזר וואלף פאדווא</option><option value="53">אליעזר יצחק זיגעלמאן</option><option value="106">אשר שמעדרא</option><option value="20">בנציון אסאראף</option><option value="9">בנציון אדלער</option><option value="11">בערל אויסטערליץ</option><option value="55">בערל זילבערמאן</option><option value="103">ברוך שליין</option><option value="48">גרשון וויינשטאק</option><option value="44">הערשל הערמאן</option><option value="95">וואלווי קליין</option><option value="65">וואלף בער לערנער</option><option value="39">זאב דייטש</option><option value="89">חיים קליין</option><option value="34">חיים אברהם גראסמאן</option><option value="70">חיים יהושע פאסטען</option><option value="61">חיים יוסף ליכטמאן</option><option value="43">חיים יעקב האפשטיין</option><option value="29">חיים יצחק גראס</option><option value="63">חיים מרדכי לערנער</option><option value="37">חיים משה גרויז</option><option value="69">יהודא אלטר פאדווא</option><option value="7">יהושע פויגל</option><option value="78">יהושע פיליפ</option><option value="32">יהושע פינחס גראס</option><option value="107">יודל שפירא</option><option value="86">יוחנן קאטצבארג</option><option value="51">יונה וועבער</option><option value="85">יוסף קאהן</option><option value="15">יוסף אונגאר</option><option value="18">יוסף איינהורן</option><option value="31">יוסף (בר''ד) גראס</option><option value="50">יוסף חיים וועבער</option><option value="25">יושע גאנצפריעד</option><option value="38">יחזקאל גרינוואלד</option><option value="10">יחיאל אדלער</option><option value="19">יעקב אליאס</option><option value="40">יעקב האכהייזער</option><option value="77">יעקב פיליפ</option><option value="75">יעקב זאב פויגל פויגל</option><option value="96">יעקב חיים קליין</option><option value="23">יצחק בערגער</option><option value="108">יצחק אייזיק שרייבער</option><option value="58">יצחק חיים יאקאב</option><option value="17">יצחק יעקב אייזנבאך</option><option value="41">יצחק צבי האכהייזער</option><option value="8">ישעיה לברון</option><option value="79">ישראל פינקלשטיין</option><option value="57">ישראל דוד זינגער</option><option value="71">מאיר פארגעס פארגעס</option><option value="42">מאיר שלום האנשטעטער</option><option value="72">מיכאל פארגעס</option><option value="26">מנחם הלל געשטעטנער</option><option value="100">מנחם מאיר שווארץ</option><option value="30">מרדכי גראס</option><option value="76">מרדכי פיליפ</option><option value="98">מרדכי ראזענגארטן</option><option value="47">מרדכי דוד וויינבערגער</option><option value="12">משה אויסטערליץ</option><option value="54">משה זיידנפעלד</option><option value="91">משה קליין</option><option value="82">משה פריעדמאן</option><option value="60">משה יוסף לאנגסאם</option><option value="35">משה שמואל גראסמאן</option><option value="45">משה שמחה הערץ</option><option value="90">משולם קליין</option><option value="59">מתתי' לאנגסאם</option><option value="111">נחום פריד </option><option value="56">נפתלי הירצקא זילבערמאן</option><option value="92">נתן קליין</option><option value="87">עקיבא קארניאל</option><option value="73">פינחס פארגעס</option><option value="64">פינחס לערנער</option><option value="112">פלוני אלמוני</option><option value="102">צבי שטערנליכט</option><option value="36">צבי אלימלך גראסמאן</option><option value="80">צבי משה פעפערקארן</option><option value="74">שלום פויגל</option><option value="93">שלום קליין</option><option value="22">שלמה בוימגארטן</option><option value="13">שלמה גרשון אונגאר</option><option value="97">שלמה זלמן קרויס</option><option value="24">שלמה לייב גאלד</option><option value="14">שמואל אונגאר</option><option value="21">שמואל בארד</option><option value="49">שמחה יונה ווייס</option><option value="84">שמעון פרקש</option><option value="67">שמעון מענצער</option><option value="94">שמעון יצחק קליין</option><option value="66">שמשון מאשקאוויטש</option>          </select>
						</td>
					</tr>
				</tbody></table>
				<div class="row mt-5" id="past-data">
				<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Payments</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Service Name</th>
                                                <th>Charge</th>
                                                <th>Paid</th>
                                                <th>Charge Date</th>
                                                <th>Hebrew Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>TEST</td>
                                                <td class="color-danger">$77.77	</td>
                                                <td class="color-success" >$12
                                                </td>
                                                <td>09/02/2021	</td>
                                                <td >13/25/5781</td>
                                            </tr>
                                            <tr>
                                                <td>FIXED charge 1</td>
                                                <td class="color-danger">$75.77	</td>
                                                <td class="color-success">$12
                                                </td>
                                                <td>09/02/2021	</td>
                                                <td >13/12/5781</td>
                                            </tr>
                                            <tr>
                                                <td>Fixed Charge 3	</td>
                                                <td class="color-danger">$77	</td>
                                                <td class="color-success" >$12.5</span>
                                                </tdclass=>
                                                <td>09/02/2021	</td>
                                                <td >13/24/5781</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>


				<label class="align-items-center d-flex" for="money">Amount:  <input name="money" class="form-control input-default col-4 ml-3" type="number"> <button class="btn btn-primary" >Pay Now</button></label>
			</div>
		
		
		<!--**********************************
            Content body end
        ***********************************-->
			
@endsection