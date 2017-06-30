@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>今まで食べた駅弁の感想を書こう！</h1>
                <table>
                    <tr>
                        <td><img src="{{ asset("images/67a06ba47149bf70e8632587a24ae7ea_s.jpg") }}" width="360" height="270" align="left"></td>
                        <td><img src="{{ asset("images/1bfbc3c2ee211999e331626fffb3bc13_s.jpg") }}" width="360" height="270" align="right"></td>
                    </tr>
                </table>
                <br clear ="both">
                <br />
                    <p>ここでは、日本各地の駅弁を食べた感想・レビューを集めています。<br />
                    皆さんが食べてきた駅弁の中で、思い出に残るくらい、印象深い駅弁もあるのではないでしょうか？<br /><br />
                    是非とも、感想をここで述べて、思い出を残していきませんか？</p>
                    <a href="" class="btn btn-success btn-lg">駅弁レビューを始める</a>
            </div>
        </div>
    </div>
@endsection