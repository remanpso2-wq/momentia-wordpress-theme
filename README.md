# Momentia WordPress Theme

アマチュアゲーミングチーム「Momentia」の公式サイトを想定して制作した、WordPressオリジナルテーマです。

黒基調のプロeスポーツチーム風デザインをベースに、チーム理念・活動記録・NEWS・CONTACT導線などを備えた公式サイトとして制作しました。

## 概要

Momentiaは、「Moment（瞬間）」と、場所・状態・集まりを表す語尾「-ia」を組み合わせたチーム名です。

> 瞬間が集まり、物語になる場所。

このコンセプトをもとに、ゲームを通じて生まれる笑い、悔しさ、熱狂、挑戦を積み重ねていくチームの公式サイトとして設計しています。

## 制作目的

このテーマは、WordPress制作経験を積むこと、またポートフォリオとして提示できる制作実績を作ることを目的に制作しました。

商用案件ではなく、自主制作・ポートフォリオ用途の作品です。

## 実装ページ

- TOP
- ABOUT
- ACTIVITY
- MEMBER
- NEWS
- CONTACT

## 主な実装内容

### オリジナルWordPressテーマ制作

既存テーマを使用せず、WordPressのテーマファイルを自作しています。

主なテンプレートファイル：

- `front-page.php`
- `page-about.php`
- `page-activity.php`
- `page-member.php`
- `page-contact.php`
- `home.php`
- `single.php`
- `header.php`
- `footer.php`
- `functions.php`

### 固定ページ専用テンプレート

各ページごとに専用テンプレートを作成し、ページの役割に合わせて構成・デザインを分けています。

- ABOUT：チーム理念・名前の由来
- ACTIVITY：活動記録・活動カテゴリ
- MEMBER：Coming Soonページ
- CONTACT：公式X・メール問い合わせ導線
- NEWS：投稿機能を使ったお知らせ管理

### NEWS投稿機能

WordPressの投稿機能を利用し、NEWS一覧と個別記事ページを実装しています。

- NEWS一覧表示
- 投稿日表示
- カテゴリー表示
- 個別記事ページ
- NEWS一覧へ戻る導線

### レスポンシブ対応

PC・スマホの両方で閲覧しやすいように、レスポンシブ対応を行っています。

- スマホ表示時のレイアウト調整
- カードUIの縦並び対応
- スマホ用メニュー実装
- ボタン・余白・文字サイズ調整

### スマホメニュー

スマホ表示では通常ナビゲーションを非表示にし、MENUボタンから開閉できるナビゲーションを実装しています。

- MENUボタン
- 開閉アニメーション
- `aria-expanded` の切り替え
- メニュー展開時のスクロール制御

### ローディング演出

サイト表示時にMomentiaロゴを使ったローディング画面を実装しています。

- ロゴ表示
- 背景グラデーション
- グリッド演出
- 光の粒アニメーション
- ローディングバー
- フェードアウト処理

### スクロールアニメーション

JavaScriptを使用し、スクロールに合わせて要素がふわっと表示される演出を実装しています。

- Intersection Observer API
- カード・セクションのフェードイン
- `prefers-reduced-motion` 対応

## 使用技術

- WordPress
- PHP
- HTML
- CSS
- JavaScript
- LocalWP
- Git / GitHub

## デザイン方針

黒・ダークグレーをベースに、紫・水色系のアクセントカラーを使用しています。

参考イメージとして、プロeスポーツチーム系のシャープな雰囲気を意識しつつ、Momentiaのコンセプトである「瞬間」「物語」「光」を表現するために、グロー・グラデーション・フェード演出を取り入れています。

## ディレクトリ構成

```text
momentia-theme/
├── assets/
│   ├── css/
│   │   └── main.css
│   ├── images/
│   │   └── momentia-logo.png
│   └── js/
│       ├── loader.js
│       └── main.js
├── archive.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── home.php
├── index.php
├── page-about.php
├── page-activity.php
├── page-contact.php
├── page-member.php
├── page.php
├── single.php
├── style.css
└── README.md