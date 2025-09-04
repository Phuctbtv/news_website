@extends('layout.index2')

@section('content')
<section class="contact-section py-5">
    <div class="container">
        <h2 class="text-center mb-4">Liên hệ với chúng tôi</h2>
        <p class="text-center text-muted mb-5">
            Nếu bạn có bất kỳ thắc mắc nào, vui lòng liên hệ qua thông tin dưới đây.
        </p>

        <div class="row">
            <!-- Thông tin liên hệ -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg border-0 rounded-4 p-4 h-100">
                    <h4 class="mb-3 text-primary">Thông tin liên hệ</h4>
                    <p><i class="fas fa-map-marker-alt text-danger me-2"></i> Ngõ 58 Trần Bình-Hà Nội</p>
                    <p><i class="fas fa-phone-alt text-success me-2"></i> 0367348026</p>
                    <p><i class="fas fa-envelope text-warning me-2"></i> phamdaiphuc20003@gmail.com</p>
                    <p><i class="fab fa-facebook text-primary me-2"></i> <a href="https://www.facebook.com/phamphuc.utc" target="_blank">Facebook Fanpage</a></p>
                </div>
            </div>

            <!-- Google Map -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden h-100">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.048137338367!2d105.77611237516867!3d21.03452388061705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455d6810edcbf%3A0x91748bb331037876!2zNTggUC4gVHLhuqduIELDrG5oLCBNYWkgROG7i2MsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpIDEwMDAwMA!5e0!3m2!1svi!2s!4v1725130536462!5m2!1svi!2s" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>


                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .contact-section {
        background: #f9fafb;
    }
    .contact-section h2 {
        font-weight: 700;
        color: #333;
    }
    .contact-section p {
        font-size: 16px;
    }
    .contact-section .card {
        transition: all 0.3s ease-in-out;
    }
    .contact-section .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    .contact-section a {
        text-decoration: none;
    }
    .contact-section a:hover {
        text-decoration: underline;
    }
</style>
@endsection
