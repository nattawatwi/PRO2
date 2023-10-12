/*Detail*/
@extends('frontend.layouts.master')
@section('main-content')

<!DOCTYPE html>
<html lang="en">

<body>
    
    

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
    
    <section class="page-section section-container mt-0 main-promotion-detail container">
    <div class="section-content">
    <a href="/promotions" class="back-button"><i class="bi bi-chevron-left"></i><span>ย้อนกลับ</span></a>
            <div class="row">
                <div class="col-12 col-md-6 main-promotion-image">
                    <img class="promotion-main-image" src="https://www.ntplc.co.th/images/default-source/promotions/bigmouthtopping/thumbnail.jpg?sfvrsn=f27ba9d1_1">
                </div>
                <div class="col-12 col-md-6">
                    <div class="mt-3 mb-2">
                    วันนี้ – 31 ส.ค.67</div>
                    <h1>เม้าท์สนุก...... ได้ทุกเครือข่ายกับโปรเสริม Big Mouth Topping
                        <h4>เม้าท์สนุก...... ได้ทุกเครือข่าย กับโปรเสริม Big Mouth Topping 240 นาที เพียง 95 บาท</h4>
                    </h1>
                    <a href="https://www.ntmobile.in.th/th/Prepaid/221.aspx" class="round-filled-button filled-black" target="_blank">สมัครเลย</a>
                        <div id="promotion-terms-accordion" class="accordion">
                            <div class="card">
                                <div class="card-header active" id="headingOne">
                                    <h5 class="m-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            รายละเอียดและเงื่อนไขการให้บริการ
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p><b><u>ระยะเวลาส่งเสริมการขาย</u></b><b> </b><b>: ตั้งแต่วันที่ 25 สิงหาคม 2566 - วันที่ 31 สิงหาคม 2567</b></p><p><b>เงื่อนไขรายการส่งเสริมการขาย&nbsp;</b>
                                        <br></p><ol dir="ltr"><li>สำหรับผู้ใช้บริการโทรศัพท์เคลื่อนที่ NT Mobile ระบบเติมเงิน สามารถสมัครรายการส่งเสริมการขายนี้ได้ผ่านช่องทาง ดังนี้
                                        <ul><li>1.1 บริการด่วนพิเศษ กด USSD ตามด้วยรหัสแพ็กเกจที่ต้องการสมัคร </li><li>1.2 บริการผ่านเว็บไซต์ โดยเข้าไปที่ www.ntmobile.in.th </li><li>1.3 บริการผ่าน Application NT Mobile </li></ul></li><li>สำหรับผู้ใช้บริการโทรศัพท์เคลื่อนที่ NT Mobile ระบบเติมเงิน ทุกซิมสามารถสมัครใช้รายการส่งเสริมการขายเสริม
                                        ชุด Big Mouth Topping นี้ได้ </li><li>สำหรับผู้ใช้บริการที่สมัครรายการส่งเสริมการขายเสริม ชุด Big Mouth Topping สามารถโทรจากโครงข่าย NT Mobile ไปยังปลายทางที่เป็นเลขหมายโทรศัพท์พื้นฐานและเลขหมายโทรศัพท์เคลื่อนที่ทุกโครงข่าย ด้วยแพ็กเกจที่ต้องการสมัคร ดังนี้ จำนวน 60 นาที ค่าบริการ 35 บาท จำนวน 120 นาที ค่าบริการ 55 บาท และจำนวน 240 นาที ค่าบริการ 95 บาท (ค่าบริการดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว) </li><li>เมื่อหน้าจอจับสัญญาณ NT Mobile ระบบจะคิดค่าบริการจากกระเป๋ากลุ่มโบนัสก่อนเสมอ หลังจากนั้นจึงทำการหักค่าบริการจากยอดเงินหลัก (กระเป๋าเมน) แต่ถ้าหน้าจอจับสัญญาณ Roaming ระบบจะคิดค่าบริการจากยอดเงินหลัก (กระเป๋าเมน) เท่านั้น</li><li>ผู้ใช้บริการสมัครรายการส่งเสริมการขายเสริม NT Mobile ระบบเติมเงิน ชุด Big Mouth Topping แล้ว ไม่สามารถเปลี่ยนหรือคืนเป็นเงินได้ </li><li>ผู้ใช้บริการที่ต้องการสมัครรายการส่งเสริมการขายดังกล่าวต้องมีจำนวนเงินคงเหลือในกระเป๋าหลักเพียงพอต่อการสมัครในแต่ละครั้ง </li><li>กรณีผู้ใช้บริการไม่มีระยะเวลาสะสมคงเหลือ (ไม่มีวันคงเหลือ) หากสมัครใช้บริการรายการส่งเสริมการขายเสริม ชุด Big Mouth Topping จะไม่สามารถใช้งานการโทรได้ จนกว่าลูกค้าจะซื้อวันเพิ่มเพื่อใช้งานต่อเนื่อง </li><li>ผู้ใช้บริการที่สมัครรายการส่งเสริมการขายเสริม ชุด Topping อยู่แล้ว สามารถสมัครรายการส่งเสริมการขาย ชุด Big Mouth Topping เพิ่มได้ </li><li>ผู้ใช้บริการควรศึกษาเงื่อนไขการใช้งาน อัตราค่าบริการ วิธีการตั้งค่าการใช้งาน พื้นที่การให้บริการ อัตราความเร็วของอินเทอร์เน็ต NT Mobile เป็นอัตราความเร็วที่วัดจากระบบในห้องปฏิบัติการอัตราความเร็ว ในการใช้งานจริงจะขึ้นอยู่กับช่วงระยะเวลา สภาพอากาศ ความหนาแน่นของผู้ใช้บริการ ปริมาณการรับ-ส่งข้อมูล และคุณภาพในการรับ-ส่งสัญญาณของอุปกรณ์เชื่อมต่อของผู้ใช้บริการ บริษัทไม่รับผิดชอบต่อความเร็วที่ได้รับและผลที่เกิดขึ้นจากการไม่สามารถเชื่อมต่ออินเทอร์เน็ต </li><li>NT Mobile สงวนสิทธิ์ที่จะระงับ เปลี่ยนแปลง หรือยกเลิกบริการหากพบว่าผู้ใช้บริการมีเจตนาไม่สุจริตผิดกฎหมาย หรือ ขัดกับประกาศของทางราชการ </li><li>NT Mobile สงวนสิทธิ์เปลี่ยนแปลงเงื่อนไขรายการส่งเสริมการขายเสริม ชุด Big Mouth Topping โดยไม่ต้องแจ้งให้ทราบล่วงหน้า </li><li>ผู้ใช้บริการสามารถตรวจสอบปริมาณการใช้งาน โดยกดรหัส *153*2# หรือผ่านทาง www.ntmobile.in.th และ Application NT Mobile ทั้งนี้สามารถศึกษาข้อกำหนดและเงื่อนไขเพิ่มเติมได้ที่ NT Mobile Contact Center 1888 </li></ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>
@endsection

/*css*/
/*Page Detail-Promotion
/* Existing CSS */

.main-promotion-image img {
    position: sticky;
    top: 100px;
}

.promotion-main-image {
    aspect-ratio: 1.3;
    border-radius: 25px;
    width: 100%;
}

body {
    min-height: 100%;
    background-color: #f7f7f7;
    line-height: 1.6; /* Adjusted line-height for better readability */
    margin: 0;
    text-align: left;
}

section {
    padding-top: 25px;
}

.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-.5 * var(--bs-gutter-x));
    margin-left: calc(-.5 * var(--bs-gutter-x));
}

/* Additional CSS for card styling */

.card {
    border: none; /* Remove border from cards */
    border-radius: 15px; /* Add border-radius for rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow for depth */
    transition: box-shadow 0.3s ease-in-out; /* Add a smooth transition effect */
    margin-top: 15px;
}

.card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Increase box shadow on hover */
}

/* Styles for the specific section */
.page-detail {
    font-family: "NT";
    font-size: 16px; /* Adjusted font size for better readability */
    line-height: 1.8; /* Adjusted line-height for better readability */
    margin-bottom: 20px; /* Adjusted margin-bottom for spacing */
}

/* Style the "สมัครเลย" button */
.round-filled-button {
    padding: 10px 20px; /* Adjust padding as needed */
    font-size: 18px; /* Adjust font size as needed */
    border-radius: 10px; /* Adjust border radius for rounded corners */
}

/* Add the rest of your existing CSS below this point */
/*สมัครเลย*/
.round-filled-button {
    display: inline-block;
    padding: 15px 45px;
    border-radius: 40px;
    text-decoration: none;
    font-size: 16px;
    color: #fff;
    background-color: #000;
    transition: background-color 0.3s, color 0.3s;
    margin-top: 10px; /* เพิ่มระยะห่างทางขวา */
}

.round-filled-button:hover {
    background-color: #d6d5d5;
    color: #000;
}

  /*ย้อนกลับ*/
  .back-button {
    display: flex;
    align-items: center; /* ตรงกลางตามแนวดิ่ง */
    text-decoration: none;
    color: #323232; /* เปลี่ยนสีตามที่คุณต้องการ */
    padding: 25px; /* ปรับขนาดการเว้นระยะห่าง */
  }
  
  .back-button i {
    margin-right: 2px; /* ปรับระยะห่างระหว่างไอคอนกับข้อความ */
    color: #adb814;
  }