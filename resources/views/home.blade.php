@extends('layouts.app')

@section('content')
    <div class="container offset-4">
        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <header>
                    <h3>What do you have to say?</h3>
                </header>
                <form action="">
                    <div class="form-group">
                        <textarea class="form-control" name="new-post" id="new-post" rows="5"
                            placeholder="Your Post"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </form>
            </div>
        </section>
        <section class="row posts">
            <div class="col-md-6 col-md-3-offset">
                <header>
                    <h3>
                        What other people say..
                    </h3>
                    <article class="post">
                        <p>Dummy Text</p>
                        <div class="info">
                            Posted by Max on 12 feb
                        </div>
                        <div class="interaction">
                            <a href="#">Like</a>|
                            <a href="#">Dislike</a>|
                            <a href="#">Edit</a>|
                            <a href="#">Delete</a>
                        </div>
                    </article>
                    <article class="post">
                        <p>Dummy Text</p>
                        <div class="info">
                            Posted by Max on 12 feb
                        </div>
                        <div class="interaction">
                            <a href="#">Like</a>|
                            <a href="#">Dislike</a>|
                            <a href="#">Edit</a>|
                            <a href="#">Delete</a>
                        </div>
                    </article>
                </header>
            </div>
        </section>
    </div>
@endsection
