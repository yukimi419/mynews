@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th class="title" width="20%">氏名</th>
                                            <td width="70%">{{ Str::limit($post->name, 20) }}</td>
                                        </tr>
                                        <tr>
                                            <th class="title">性別</th>
                                            <td> {{ Str::limit($post->gender, 10) }}</td>
                                        </tr>
                                        <tr>
                                            <th class="title">趣味</th>
                                            <td>{{ Str::limit($post->hobby, 150) }}</td>
                                        </tr>
                                        <tr>
                                            <th class="title">自己紹介</th>
                                            <td>{{ Str::limit($post->introduction, 1500) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach    
            </div>
        </div>
    </div>
@endsection    