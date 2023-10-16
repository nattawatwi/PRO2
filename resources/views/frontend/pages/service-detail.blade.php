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
    

<section class="page-section section-bg-light section-right" style="margin-bottom: 100px;">
    <div class="section-content">
        <div class="section-fiber-services-content">
            <div class="container ">
                <h1>คุณสมบัติ</h1>
                <ul>
                    <li>ให้บริการผ่านโครงข่าย MPLS/VPN (L2) ที่ครอบคลุมพื้นที่ให้บริการทั่วประเทศและเชื่อมโยงไปยัง PoP (Point of Presence ) ของ NT ในต่างประเทศที่เป็นศูนย์กลางโทรคมนาคมของโลก</li>
                    <li>ให้บริการไปได้ทั่วโลกโดยร่วมมือกับพันธมิตรระดับชั้นนําของโลก ทําให้สามารถตอบสนองทุกความต้องการของลูกค้าด้วยคุณภาพระดับสากล</li>
                    <li>ให้บริการเชื่อมต่อ Interface แบบ RJ-45 และ Optical</li><li>รองรับการสื่อสารข้อมูลแบบ IP Protocol ทําให้สามารถรับสองได้ทั้งข้อมูลภาพ เสียงและวีดีโอ</li></ul>
                    <div class="row floating-content-wrapper">
                        <div class="col-xs-12 col-sm-6">
                            <img src="https://www.ntplc.co.th/images/default-source/nt-products/ip-vpn-international/ip-vpn55f0dac9-f7cd-4471-9e86-d87e289a5400.webp?sfvrsn=252b0ed2_1">
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="floating-content">
                                <h3>รายละเอียดบริการ</h3>
                                <ul><li>บริการสื่อสารข้อมูลความเร็วสูงแบบจุดต่อจุด จุดต่อหลายจุด หรือหลายจุดต่อหลายจุด จากโครงข่าย IP ภายในประเทศไปยังจุดหมายปลายทางในต่างประเทศ ครอบคลุมภูมิภาคต่างๆ ทั่วโลก มีขนาดวงจรให้เลือกใช้ตั้งแต่ 64 Kbps. เป็นต้นไป เหมาะสำหรับกลุ่มลูกค้าองค์กรธุรกิจ บริษัทขนาดใหญ่ และบริษัทข้ามชาติ ให้สามารถเชื่อมโยงการรับ-ส่งข้อมูลระหว่างสาขาได้อย่างมีประสิทธิภาพ รวดเร็ว และปลอดภัย</li></ul>
                            </div>
                            <div class="floating-content">
                                <h3>ประโยชน์<br></h3>
                                <ul><li>การรับ-ส่งข้อมูลมีความปลอดภัยสูง และรวดเร็ว</li>
                                <li>ประหยัดค่าใช้จ่าย และง่ายต่อการเชื่อมต่อ</li>
                                <li>รองรับความต้องการของลูกค้าได้หลายระดับ (Class of service)</li></ul>
                            </div>
                            <div class="floating-content">
                                <h3>รูปแบบบริการ</h3>
                                <ul><li>บริการแบบ PE-to-PE : NT เป็นผู้ให้บริการเฉพาะโครงข่ายหลักเท่านั้น โดยผู้ใช้บริการจัดหาอุปกรณ์และโครงข่ายปลายทางเอง</li>
                                <li>บริการแบบ End-to-End : NT ให้บริการโครงข่ายหลัก และโครงข่ายปลายทางไปยังอุปกรณ์ของผู้ใช้บริการ โดยผู้ใช้บริการเป็นผู้จัดหาอุปกรณ์ปลายทางเอง</li>
                                <li>บริการแบบ CE-to-CE : NT เป็นผู้ให้บริการจัดหาอุปกรณ์และโครงข่าย รวมทั้งบำรุง รักษาอุปกรณ์ปลายทางทั้งหมด (Managed service)</li></ul>
                            </div>
                            <div class="floating-content">
                                <h3>สนใจติดต่อได้ที่ Contact Center:&nbsp;<a data-sf-ec-immutable="">1888</a><a style="font-size: var(--font-size-h3); text-align: inherit; text-transform: inherit; white-space: inherit; word-spacing: normal" data-sf-ec-immutable=""></a></h3>
                            </div>
                        </div>
                        <div class="fiber-services">
                            <div class="deco deco-signal" style="transform: translateX(0px) translateY(2.47372px);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



</body>
</html>
@endsection

