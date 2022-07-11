@extends('layouts.app')

@section('content')


<style>
    * {
        box-sizing: border-box;
    }

    .content {

        color: #fff;
        font-family: 'Muli', sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        overflow: hidden;
        margin: 0;
    }

    .container-up {
        background-color: rgba(0, 0, 0, 0.4);
        padding: 20px 40px;
        border-radius: 5px;
    }

    .container-up h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    .container-up a {
        text-decoration: none;
        color: lightblue;
    }

    .btn {
        cursor: pointer;
        display: inline-block;
        width: 100%;
        background: lightblue;
        padding: 15px;
        font-family: inherit;
        font-size: 16px;
        border: 0;
        border-radius: 5px;
    }

    .btn:focus {
        outline: 0;
    }

    .btn:active {
        transform: scale(0.98);
    }

    .text {
        margin-top: 30px;
    }

    .form-control {
        position: relative;
        margin: 20px 0 40px;
        width: 300px;
    }

    .form-control input {
        background-color: transparent;
        border: 0;
        border-bottom: 2px #fff solid;
        display: block;
        width: 100%;
        padding: 15px 0;
        font-size: 18px;
        color: #fff;
    }

    .form-control input:focus,
    .form-control input:valid {
        outline: 0;
        border-bottom-color: lightblue;
    }

    .form-control label {
        position: absolute;
        top: 15px;
        left: 0;
        pointer-events: none;
    }

    .form-control label span {
        display: inline-block;
        font-size: 18px;
        min-width: 5px;
        transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .form-control input:focus+label span,
    .form-control input:valid+label span {
        color: lightblue;
        transform: translateY(-30px);
    }

    nav {
        width: 100%;
    }
</style>
<div class="content">

    Create Post


    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif






    <div class="container-up">
        <h1>post</h1>
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-control">
                <input type="text" name="title" required>
                <label>title</label>
            </div>
            <div class="form-control">
                <textarea name="description" style="width: 100%;" placeholder="Description..."></textarea>
                <label>description</label>
            </div>
            <div class="form-control">
                <input type="file" name="image" class="hidden">
            </div>
            <!-- <label>
            <span style="transition-delay: 0ms">E</span>
              <span style="transition-delay: 50ms">m</span>
              <span style="transition-delay: 100ms">a</span>
              <span style="transition-delay: 150ms">i</span>
              <span style="transition-delay: 200ms">l</span>
        </label> -->


            <button type="submit" class="btn">submit</button>

            <p class="text">Don't have an account? <a href="#">Register</a> </p>
        </form>
    </div>

</div>
<script>
    const labels = document.querySelectorAll('.form-control label')

    labels.forEach(label => {
        label.innerHTML = label.innerText
            .split('')
            .map((letter, idx) => `<span style="transition-delay:${idx * 50}ms">${letter}</span>`)
            .join('')
    })
</script>

@endsection