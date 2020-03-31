@extends('layouts.app')
@include('layouts.part')

@section('child-title')HOME画面@endsection
@section('child-description')HOME画面ページです。@endsection

@section('breadcrumb')
{{ Breadcrumbs::render('home') }}
@stop

@section('content')

<div class="panel panel-default">
	<div class="panel-heading"><h1>{{config('app.name')}}掲示板の使い方</h1></div>
	<div class="panel-body">

		<p>ご利用の際には、{{config('app.name')}}の「<a href="{{route('policy')}}">免責事項・注意事項</a>」をお読みの上利用してください。</p>

		
		<h2>
			<font color = "red">{{$message}}</font>
		</h2>

		<h2 class="header">ダンサーリンクについて</h2>
		<p>当サイトはダンサーが練習に必要なレンタルスタジオを検索するサイトです。</p>
		<p>住所を入れていただくとGoogle Mapsを用いて付近のスタジオを検索することができます。</p>
		<p>またキーワードを入れることでスタジオを検索することも可能です。</p>
		<p>スタジオ名をクリックすればHPに遷移するようになっています。</p>
		<p>サイトに登録されていないスタジオを知っていたら「スタジオ登録」で登録してくださるとありがたいです。</p>

		<h2 class="header">注意事項</h2>
		<p>緯度と経度を入力しても多少ずれることがあります。実際にスタジオに訪れる際はHPのアクセスを確認してください。</p>
		<p>使用可能時間がそれぞれのスタジオによって違います。必ずHPで確認してください。</p>

		<h2 class="header">禁止事項</h2>
		以下の内容の登録については、予告なく削除することがあります。
		<ul>
			<li>法令や公序良俗に反する表現を含む場合</li>
			<li>犯罪行為またはこれを予告、関与、助長した場合</li>
			<li>虚偽または誤解を招くような内容を含む情報を登録した場合</li>
			<li>同一内容の情報を複数登録した場合</li>
			<li>特定のスタジオの評判を毀損し、信用不安を引き起こす恐れのある場合</li>
			<li>当サイトが提供するサービスの趣旨に関連のない情報を登録した場合</li>
			<li>第三者の財産、信用、名誉、プライバシーを侵害した場合</li>
			<li>電話番号やメールアドレスなどの自己または第三者の個人情報を含む場合</li>
			<li>自己または第三者の営業に関する宣伝、またはその他営利を目的とした場合</li>
			<li>有害なプログラムやスクリプトなどを含む場合</li>
			<li>サイトまたは第三者に対する誹謗中傷の場合</li>
			<li>当サイトの運営を妨げる内容を含む場合</li>
			<li>その他、当サイトが不適当と判断した場合</li>
		</ul>

		<h2 class="header">免責</h2>
		<p>当サイトのご利用にあたり、利用者間または利用者と紹介先のサービスとの間で発生した各種係争、問題に関しては、当サイトは一切関知しないものとします。</p>

		<p>雷、地震、クラッキング、あるいはその他のシステムトラブルなどによりデータの一部もしくは全部が消去されたとしても、当サイトは一切の責任を負わないものとします。</p>

		<p>投稿の削除は、運営の判断のもと行います。個別のメール対応はいたしておりませんので、ご理解願います。</p>

		
	</div>
</div>


@endsection

