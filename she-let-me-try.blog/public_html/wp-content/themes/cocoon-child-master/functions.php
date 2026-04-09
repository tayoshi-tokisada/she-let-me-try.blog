<?php //子テーマ用関数
if ( !defined( 'ABSPATH' ) ) exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く
//カスタムテキストメニューの数を増やす
add_filter('cocoon_custom_text_count', function ($count){
  $count = 1;
  return $count;
});

// エディターのカスタムテキスト名を変更する
add_filter('cocoon_custom_text_titles', function($titles) {
    // 'custom1' の部分を任意の名前に書き換えます
    $titles['custom1'] = '灰色';
    $titles['custom2'] = '灰太字';

    return $titles;
});

// ブロックエディターに独自のスタイル（クラス）を追加する
register_block_style(
    'core/paragraph', // 段落に適用する場合
    array(
        'name'  => 'my-custom-design', // これがクラス名（my-custom-design）になる
        'label' => '自分専用デザイン',   // エディター上の表示名
    )
);