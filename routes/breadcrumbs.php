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

Breadcrumbs::register('thread.archive', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('スレッド一覧',route('thread.archive'));
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
Breadcrumbs::register('company', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('会社概要',route('company'));
});
Breadcrumbs::register('policy', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('利用規約',route('policy'));
});
Breadcrumbs::register('privacy', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('プライバシーポリシー',route('privacy'));
});
Breadcrumbs::register('link', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('外部リンク',route('link'));
});