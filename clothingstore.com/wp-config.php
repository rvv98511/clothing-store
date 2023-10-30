<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'clothingstore' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~ v7n?d?$`m2?(*kV5L)!<W.|ZgXUxi S3y]z%H:+v7 4 Pkn4O)=o|y^!:=.K75' );
define( 'SECURE_AUTH_KEY',  '<a2Sa,&DZ.n(+Pk{)!:d$gKu.0&{6V*+yLqp`)^:M<Y@ma[rP&v=hL(jT(-PzIOn' );
define( 'LOGGED_IN_KEY',    'sVDX4wHIrSa03}dI~=Pr%VIY_dx5=iD%,X.(?GVq%5k!XZ=!/;BO,f7T^!5>)VM}' );
define( 'NONCE_KEY',        'xF(w/UjGklgEoo-0>9(jJ;?F0Q<lSo<tN+=9EG@gz~dU|nL<WK.Px{wP{8K{?^Ct' );
define( 'AUTH_SALT',        'X1!n]J;|Uv5Z^:o4LRK~dk<EAhd9^@DlJg0mQ]]~_m-hLr6`37bJYi?7Z*8H]kC1' );
define( 'SECURE_AUTH_SALT', 'g~^iy)bHK &8`tc!wlRRH9SNnn5tXnTbtGMlh-zQ[+?p(DfuR@B9tgBKWHAYA|s}' );
define( 'LOGGED_IN_SALT',   'UwMCJ+Ua6%Q3iR 60Y?L9GWS|CyaRZ6d:28t#=qUT&S|>>zK2utp(AT?J>b_;YaA' );
define( 'NONCE_SALT',       'qiT48!|f=hU/pfB}Mt-ChWbemD<_}ZKHdz>Ew;&b,}] .<@k%9JG^|H3`CTm,X,|' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
