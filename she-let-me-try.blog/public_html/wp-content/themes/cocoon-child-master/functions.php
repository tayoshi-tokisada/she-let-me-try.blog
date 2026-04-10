<?php //子テーマ用関数
if ( !defined( 'ABSPATH' ) ) exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く

// 初期化のタイミングで実行する
add_action('init', function() {

  //カスタムテキストメニューの数を増やす
  add_filter('cocoon_custom_text_count', function ($count){
    $count = 2;
    return $count;
  });

  // ブロックエディターに独自のスタイル（クラス）を追加する
  // 段落に適用
  register_block_style(
      'core/paragraph',
      array(
          'name'  => 'dasoku', // クラス名（is-style-[name]）
          'label' => '蛇足',   // エディター上の表示名
      )
  );

});