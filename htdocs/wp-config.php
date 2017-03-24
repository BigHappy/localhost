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
define('DB_NAME', 'wp-01');

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
define('AUTH_KEY',         'YT#xPX);.lZ-ah[E;tqoK$k</D~^!4i+3/t.z<1L[6av##s6&*/&J8,R<foW1Z80');
define('SECURE_AUTH_KEY',  'JZybopoXhog}&.>uf;<VtY}=Tt*!&Hh&O6Ih51>Chq3@zsy*<cc<;)+ uSm;m4T6');
define('LOGGED_IN_KEY',    '1!o/w_+n5$KzX|VvbZ;/d|3sl ttB5yLHa>e#nmzCNHXPa.ioZK9H?Pk&T%dpNzF');
define('NONCE_KEY',        'Xj^<qbp&]n+>N<Vw2ft3m<rP@~?ZKd)Jgwe0.3,jV[PN s9n[]XKH/158p^kj&g!');
define('AUTH_SALT',        'huj(X:SNJz_BOAA=3TT[R@ i9Cq![o4E!tLr<pMo]*$S]K^|5 88?O`)2cXbR[#(');
define('SECURE_AUTH_SALT', '#GbxU?f~$X<X=F !_U,dX^()$1`Vd7/I6G+w~Y=,n:eW)Ah.la(H#K5SrUpt|b18');
define('LOGGED_IN_SALT',   '^oj:-0LkNpPy<A1>6/5_=,lS/W<P7v>,tp>d7&f*EPB48:Eg>|WPS65~QV{83<&T');
define('NONCE_SALT',       '>n,>hB/Q#>n=}!Qk0;R2)|8dj8FxHXGNI-[ 6jh*wQ >obtGo(+RtKTjr*m3O~(T');

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
