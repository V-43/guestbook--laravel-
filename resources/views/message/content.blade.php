@extends('layouts.index')
@section('content')
    <h1>Гостевая книга</h1>
    <div id="pagination">
        @section('pagination')
            <div>
                <nav>
                    <ul class="pagination">
                        <li v-if="currPage==1" class="disabled">
                            <span aria-hidden="true">&laquo;</span>
                        </li>
                        <li v-else>
                            <a href="#" aria-label="Previous" @click.prevent="getPage(1)">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li v-for="i in lastPage" :class="{active: currPage==i}">
                            <a href="#" @click.prevent="getPage(i)">@{{ i }} </a>
                        </li>
                        <li v-if="currPage==lastPage" class="disabled">
                            <span aria-hidden="true">&raquo;</span>
                        </li>
                        <li v-else>
                            <a href="#" aria-label="Next" @click.prevent="getPage(lastPage)">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        @show
        @include('message.form')
        @include('message.vuejs')
    </div>
@endsection