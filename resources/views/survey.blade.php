@extends('newlayout.main')

@section('title')
    Survey
@endsection

{{-- @section('contact', 'active') --}}

@section('content')
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Survey Sinarmed Jaya</h1>
                    <h1 class="contact_taital2">Survey Pengunjung Untuk Produk Sinarmed Jaya</h1>
                </div>
            </div>
        </div>
        <div class="container">            
            <form method="POST" action="{{ route('survey.store') }}">
                @csrf
                <div class="contact_section_2">
                    <div class="row">
                        <h3 class="contact_taital3">Terima Kasih Telah Mengunjungi Booth Kami, Jika berkenan silahkan untuk mengisi pertanyaan yang sudah kami siapkan dibawah ini.</h3>
                        <div class="col-md-12">
                            <div class="mail_section_1">
                                <input type="text" class="mail_text" placeholder="Nama Lengkap" name="nama"
                                    id="nama" required>
                                <input type="text" class="mail_text" placeholder="Instansi/Perusahaan" name="instansi"
                                    id="instansi" required>
                                <input type="text" class="mail_text" placeholder="No Handphone" name="no_hp"
                                    id="no_hp" required>
                                <textarea class="massage-bt" placeholder="Rencana Pengembangan Rumah Sakit Kedepan" name="saran" id="saran"
                                    required></textarea>
                                <div class="send_bt"><button type="submit" class="btn btn-danger">Submit</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- contact section end -->
@endsection
