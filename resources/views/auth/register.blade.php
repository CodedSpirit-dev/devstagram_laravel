@extends('layouts.app')

@section('title')
    Register in Devstagram
@endsection

@section('content')
    <div class="md:flex ">
        <div class="md:w-1/2" >
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit
            </p>
        </div>

        <div md:w-1/2>
            <form>
                <div class="mb-5"
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Name</label>
                <input
                    id="name"
                    name="name"
                    type="text"
                    placeholder="Your name"
                    class="border p-3 w-full rounded-lg"/>
                </div>

                <div class="mb-5"
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold" >Username</label>
                <input
                    id="username"
                    name="name"
                    type="text"
                    placeholder="Your username"
                    class="border p-3 w-full rounded-lg"/>
                </div>
            </form>
        </div>

    </div>
@endsection
