<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*^gnc_5~{${3o0`Guqt7er=b(V9m2qui;A5tM5QskRTOGEj&RwRqmk@QOCx-dY(v');
define('SECURE_AUTH_KEY',  '7nTXb,SpKQK,<>T>=g9mE6|_ak, GBz}d!A<`P5keu9DS(<U=L#X7U`P1hpA<_do');
define('LOGGED_IN_KEY',    'uoL5_/dh5);R*MoX%*E%j/@aw)5LwrkUur2JM{q 4o`f:nNwhCmhJ~*NeoOTpH;;');
define('NONCE_KEY',        '_kztKs66I]KS:dUV@V=}@htywNJbxXFbz`;i>nC,gXhT5O]3FFZk$p7,h>n7{| z');
define('AUTH_SALT',        '/$K/=YC NnH+bfxl>f oL0GVWFPgnO+-4N?bFu;a~{z}qT//B+b,yGJ,o#j!{?]a');
define('SECURE_AUTH_SALT', '!AwQ?~];+4Ur[1hc]gUi0:W[Y_nBvwiO]<P]hV0)}*>-,[$J6#XVD=3@is2/one7');
define('LOGGED_IN_SALT',   'W} $/V*f$CBFVkoCn,Bk?hSFDU^#(Tmw$5%3,pHG;m5hU_>[HHQ`>:$d[(pTIV=<');
define('NONCE_SALT',       'xJ*G+p6!(Y&60B+QVIrLm1n%ip|>7L]D0yCNz]/:5*8d_ OR:~?Lod(1z4)}LM4J');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
