@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-9 col-full-width-right">
            <div class="blog-detail-image">
                <img src="#" data-src="holder.js/1900x263?bg=d0d0d0" class="img-responsive" alt="Image">
            </div>
            <!-- /.blog-detail-image -->
            <div class="the-box no-border blog-detail-content">
                <p>
                    <span class="label label-danger square">July 11, 2014 @05:10:45 PM</span>
                </p>
                <p class="text-justify">
                    {!!html_entity_decode($blog->blog_content)!!}
                  

                </p>


                <hr>
                <p>
                    <span class="label label-info square">LEAVE A COMMENT</span>
                </p>
                <form role="form">
                    <div class="form-group label-floating">
                        <label class="control-label" for="name">Your Name</label>
                        <input type="text" class="form-control input-lg" id="name" required>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label" for="mail">Your email address</label>
                        <input type="email" class="form-control input-lg" id="mail" required>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label" for="website">Your Website</label>
                        <input type="url" class="form-control input-lg" id="website" required>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label" for="message">Your Comment</label>
                        <textarea class="form-control input-lg no-resize" rows="7" id="message" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-raised btn-success btn-md">
                            <i class="material-icons">comment</i> Submit comment
                        </button>
                    </div>
                </form>
            </div>
            <!-- /the.box .no-border -->
        </div>
    </div>
</div>
@endsection
