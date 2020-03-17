<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
	$breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('search.archive', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('検索結果');
});

Breadcrumbs::register('category.archive', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('カテゴリー一覧',route('category.archive'));
});


Breadcrumbs::register('category.post', function ($breadcrumbs,$category) {
	$breadcrumbs->parent('category.archive');
	$breadcrumbs->push($category->name, route('category.post',$category->id));
});

Breadcrumbs::register('studio.archive', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('スタジオ一覧',route('studio.archive'));
});

Breadcrumbs::register('studio.pref', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('住所検索',route('studio.pref'));
});

Breadcrumbs::register('mapsearch', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('住所検索',route('studio.pref'));
	$breadcrumbs->push('検索結果',route('mapsearch'));
});

Breadcrumbs::register('register', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('登録画面',route('register'));
});

Breadcrumbs::register('thread.post', function ($breadcrumbs,$thread) {
	$breadcrumbs->parent('category.archive');
	$breadcrumbs->push($thread->category->name, route('category.post',$thread->category->id));
	$breadcrumbs->push($thread->title, route('thread.post',$thread->id));
});
Breadcrumbs::register('thread.create', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('スレッド新規追加',route('thread.create'));
});
Breadcrumbs::register('contact', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('お問い合わせ',route('contact'));
});
Breadcrumbs::register('confirm', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('お問い合わせ',route('contact'));
	$breadcrumbs->push('お問い合わせ確認',route('confirm'));
});


Breadcrumbs::register('policy', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('利用規約',route('policy'));
});
Breadcrumbs::register('privacy', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('プライバシーポリシー',route('privacy'));
});
Breadcrumbs::register('tokusho', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('特定商取引法に基づく表記',route('tokusho'));
});
Breadcrumbs::register('link', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('外部リンク',route('link'));
});

// admin
Breadcrumbs::register('Admin', function ($breadcrumbs) {
	$breadcrumbs->push('AdminHome', route('admin'));
});
Breadcrumbs::register('admin.permission', function ($breadcrumbs) {
	$breadcrumbs->parent('Admin');
	$breadcrumbs->push('スタジオ許可',route('admin.permission'));
});
Breadcrumbs::register('admin.studios', function ($breadcrumbs) {
	$breadcrumbs->parent('Admin');
	$breadcrumbs->push('スタジオ編集',route('admin.studios'));
});
Breadcrumbs::register('admin.register', function ($breadcrumbs) {
	$breadcrumbs->parent('Admin');
	$breadcrumbs->push('スタジオ登録',route('admin.register'));
});
Breadcrumbs::register('admin.contact', function ($breadcrumbs) {
	$breadcrumbs->parent('Admin');
	$breadcrumbs->push('お問い合わせ',route('admin.contact'));
});

