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
                </div>
            </div>
        </div>
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('survey.store') }}">
                @csrf
                <div class="contact_section_2">
                    <div class="row">
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
