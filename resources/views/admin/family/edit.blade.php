@extends('admin.dashboard')

@section('template_title')
    {{ __('Actualizar Tutor y Sus Hijos') }}
        @endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('family.update', $tutor->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.family.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection