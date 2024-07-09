-- MySQL dump 10.13  Distrib 8.0.33, for macos13.3 (x86_64)
--
-- Host: localhost    Database: real_estate
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `real_estate`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `real_estate` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `real_estate`;

--
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `albums` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albums`
--

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;
/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'article type 1 会社情報　2 会社ニュース',
  `cover_title` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `cover_title_en` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `cover_image_id` int NOT NULL DEFAULT '0',
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `cover_intro` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `title` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `title_en` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 off 1 publish',
  `show_rank` int NOT NULL DEFAULT '0' COMMENT '表示順',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (10,1,'content / 01','PHILOSOPHY',16,'','企業理念・ごあいさつ','企業理念','Corporate philosophy','<link rel=\"stylesheet\" type=\"text/css\" href=\"/index2/css/company/philosophy.css\" />\r\n<div class=\"content_block width_full clearfix\">\r\n			<div class=\"block_inner content1\">\r\n				<h2 class=\"content_title\">\r\n					<span class=\"title-ja\">企業理念</span>\r\n					<span class=\"title-en\">Corporate philosophy</span>\r\n				</h2>\r\n				<div class=\"introduction_statement clearfix\">\r\n					<p class=\"em\">\r\n						「信頼・創造・未来」\r\n					</p>\r\n					<p>\r\n						私たちは　お客様の信頼を最高価値として\r\n						<br>日々創造を続け　輝かしい未来を目指します\r\n					</p>\r\n				</div>\r\n			</div>\r\n		</div>\r\n\r\n<div class=\"content_block width_full clearfix\">\r\n			<div class=\"block_inner content2\">\r\n				<h2 class=\"content_title\">\r\n					<span class=\"title-ja\">ごあいさつ</span>\r\n					<span class=\"title-en\">Greeting</span>\r\n				</h2>\r\n				<div class=\"img-txt greeting clearfix\">\r\n					<div class=\"img-area img-cap-wrap\">\r\n						<img src=\"http://lyc.com/index2/img/company/philosophy/greeting.jpg\" alt=\"代表取締役 社長執行役員　福居　賢悟\">\r\n						<span class=\"img-cap\">代表取締役 社長執行役員　福居　賢悟</span>\r\n					</div>\r\n					<div class=\"txt-area\">\r\n						<div class=\"txts txt-legible\">\r\n							<p>\r\n								弊社は「信頼・創造・未来」という企業理念のもと、お客様の不動産に関するさまざまなニーズにお応えしてまいりました。\r\n							</p>\r\n							<p>\r\n								世の中の変化はめまぐるしく、不動産を取り巻く環境も常に変化しています。私たちが取り扱う不動産という商品は、一般的な量産品とは異なり、唯一無二のものであり、きわめて高価なものです。そのため、売買・賃貸などの取引を成立させるには、お客様の「信頼」が欠かせません。\r\n							</p>\r\n							<p>\r\n								その信頼を得るためには、お客様の不動産に関わるさまざまなご要望を的確にキャッチし、弊社にしかできない商品やサービスを「創造」していくことが必要です。\r\n								<br>弊社は東京建物グループの一員として、グループの多彩な事業から最適なソリューションを導き出し、東京建物グループだからこそ実現可能である総合的な提案を行ってまいります。\r\n							</p>\r\n							<p>\r\n								東京建物グループでは、2030年頃を見据えた長期ビジョン「次世代デベロッパーへ」を掲げています。\r\n								<br>弊社では、「仲介事業」「アセットソリューション事業」「賃貸事業」の３つの事業を通じて不動産に新しい価値を付加することにより、お客様のニーズにお応えすることで、「社会課題の解決」と「企業としての成長」をより高い次元で実現することを目指してまいります。\r\n								<br>そして、お客様の信頼を最高価値として、日々創造を続け、「未来」を切り拓いていくという姿勢を変えることなくいつの時代も続けてまいります。\r\n							</p>\r\n							<p>\r\n								今後とも弊社および東京建物グループの活動にご期待いただきますよう、お願い申し上げます。\r\n							</p>\r\n						</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>',1,1,'2023-07-09 17:18:53','2023-07-20 20:36:19'),(11,1,'content / 02','OUTLINE',17,'storage/files/file-2023-07-10-64ab6b1bbf7ca.jpg','会社概要','会社概要','Outline','<link rel=\"stylesheet\" type=\"text/css\" href=\"/index2/css/company/outline.css\" />\r\n<div class=\"content_block width_full clearfix\">\r\n			<div class=\"block_inner content1\">\r\n				<h2 class=\"content_title\">\r\n					<span class=\"title-ja\">会社概要</span>\r\n					<span class=\"title-en\">Outline</span>\r\n				</h2>\r\n\r\n				<table class=\"table-outline\">\r\n					<tbody>\r\n						<tr>\r\n							<th class=\"title\">会社名</th>\r\n							<td>東京建物不動産販売株式会社<br>(Tokyo Tatemono Real Estate Sales Co.,Ltd.)</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">本社<br class=\"forSp\">所在地</th>\r\n							<td>東京都中央区八重洲1-5-20 <br class=\"forSp\">東京建物八重洲さくら通りビル<br><a href=\"http://lyc.com/company2/outline#anc01\" class=\"target_map js_link_in_page\">地図はこちら</a>\r\n								<!-- <ul class=\"list-notes\">\r\n									<li>\r\n										賃貸営業本部は東京都中央区京橋1-11-1 関電不動産八重洲ビルとなりますのでご注意ください。\r\n										<br><a href=\"#anc02\" class=\"target_map js_link_in_page\">地図はこちら</a>\r\n									</li>\r\n								</ul> -->\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">法人番号</th>\r\n							<td>3011101015098</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">適格請求書発行事業者<br>登録番号</th>\r\n							<td>T3-0111-0101-5098</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">電話番号</th>\r\n							<td>03-6837-7700（代表）</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">資本金</th>\r\n							<td>43億円</td>\r\n						</tr>\r\n						<!-- <tr>\r\n							<th class=\"title\">売上高</th>\r\n							<td>28,538百万円（2022年度）</td>\r\n						</tr> -->\r\n						<tr>\r\n							<th class=\"title\">創立</th>\r\n							<td>1980年5月17日</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">従業員数</th>\r\n							<td>423名（2022年12月31日現在）</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">代表者</th>\r\n							<td>\r\n								<dl class=\"officer\">\r\n									<dt>代表取締役 <br class=\"forSp\">社長執行役員</dt>\r\n									<dd>福居 賢悟</dd>\r\n								</dl>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">免許番号</th>\r\n							<td>国土交通大臣（11） 第2885号</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">事業内容</th>\r\n							<td>仲介事業、アセットソリューション事業、賃貸事業</td>\r\n						</tr>\r\n						<!-- <tr>\r\n							<th class=\"title\">子会社</th>\r\n							<td><a class=\"target_blank js_to_jrental\" href=\"http://www.jrental-g.co.jp/\" target=\"_blank\" rel=\"noopener noreferrer\">日本レンタル保証株式会社</a></td>\r\n						</tr> -->\r\n						<tr>\r\n							<th class=\"title\">所属団体</th>\r\n							<td>（一社）不動産協会、（一社）不動産流通経営協会、（公社）首都圏不動産公正取引協議会、<br>（一社）日本投資顧問業協会、（一社）不動産証券化協会(準会員)</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n\r\n			</div>\r\n		</div>\r\n\r\n		<div class=\"content_block width_full clearfix\">\r\n			<div class=\"block_inner content1\">\r\n				<h2 class=\"content_title\">\r\n					<span class=\"title-ja\">アクセス</span>\r\n					<span class=\"title-en\">Access</span>\r\n				</h2>\r\n\r\n				<h3 class=\"block_title\" id=\"anc01\">\r\n					<span>東京建物八重洲さくら通りビル</span>\r\n				</h3>\r\n\r\n				<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8019479017084!2d139.7682443146509!3d35.681878337545086!2m3!1f0!2f0!3f0!3m2!1i1024!      2i768!4f13.1!3m3!1m2!1s0x60188bfdb51b594b%3A0xad827ba2aedbad39!2z5p2x5Lqs5bu654mp5YWr6YeN5rSy44GV44GP44KJ6YCa44KK44OT44Or77yI5pen55-z5aGa5YWr6YeN5rSy44OT44Or77yJ!5e0!3m2!      1sja!2sjp!4v1593502845717!5m2!1sja!2sjp\" width=\"1200\" height=\"400\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>\r\n\r\n				<div class=\"access_item_wrap clearfix\">\r\n					<dl class=\"access_item\">\r\n						<dt><span class=\"eki\">JR線「東京」</span>駅</dt>\r\n						<dd>徒歩<span class=\"time\">1</span>分</dd>\r\n					</dl>\r\n					<dl class=\"access_item\">\r\n						<dt><span class=\"eki\">東京メトロ「日本橋」</span>駅 B3出口</dt>\r\n						<dd>徒歩<span class=\"time\">3</span>分</dd>\r\n					</dl>\r\n				</div>\r\n			</div>\r\n		</div>',1,1,'2023-07-09 17:21:15','2023-07-09 21:30:57'),(12,1,'content / 03','HISTORY',18,'storage/files/file-2023-07-10-64ab6b9c23dcc.jpg','沿革','沿革','History','<link rel=\"stylesheet\" type=\"text/css\" href=\"/index2/css/company/history.css\" />\r\n<div class=\"content_block width_full clearfix\">\r\n			<div class=\"block_inner content1\">\r\n				<h2 class=\"content_title\">\r\n					<span class=\"title-ja\">沿革</span>\r\n					<span class=\"title-en\">History</span>\r\n				</h2>\r\n\r\n				<div class=\"introduction_statement clearfix\">\r\n					<p>\r\n						1980年、東京建物の不動産流通部門を担って発足。\r\n						<br>不動産流通分野で幅広い事業を展開しています。\r\n					</p>\r\n				</div>\r\n\r\n				<table class=\"table-history\">\r\n					<tbody>\r\n						<tr>\r\n							<th class=\"title\" rowspan=\"2\">1980年<br>(昭和55年)</th>\r\n							<th>5月</th>\r\n							<td>東京都新宿区に「東建住宅サービス株式会社」として営業を開始</td>\r\n						</tr>\r\n						<tr>\r\n							<th>10月</th>\r\n							<td>第1号店舗、相模原支店（現：町田支店） 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\" rowspan=\"2\">1981年<br>(昭和56年)</th>\r\n							<th>5月</th>\r\n							<td>横浜支店 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th>9月</th>\r\n							<td>津田沼支店 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">1983年<br>(昭和58年)</th>\r\n							<th>9月</th>\r\n							<td>受託営業部（現：賃貸営業第一部） 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">1986年<br>(昭和61年)</th>\r\n							<th>9月</th>\r\n							<td>「東京建物不動産販売株式会社」に改称</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">1987年<br>(昭和62年)</th>\r\n							<th>9月</th>\r\n							<td>大阪支店（現：関西支店） 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">1992年<br>(平成4年)</th>\r\n							<th>10月</th>\r\n							<td>ビルテナント部（現：賃貸営業第二部） 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">1996年<br>(平成8年)</th>\r\n							<th>3月</th>\r\n							<td>営業部門に「住宅営業本部」「賃貸営業本部」「流通営業本部」の各営業本部制を導入</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">1999年<br>(平成11年)</th>\r\n							<th>4月</th>\r\n							<td>「管理本部（現：経営管理本部）」 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">2005年<br>(平成17年)</th>\r\n							<th>1月</th>\r\n							<td>監査室 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">2006年<br>(平成18年)</th>\r\n							<th>7月</th>\r\n							<td>東京証券取引所市場第二部上場</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\" rowspan=\"3\">2007年<br>(平成19年)</th>\r\n							<th>4月</th>\r\n							<td>名古屋支店 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th>11月</th>\r\n							<td>賃貸保証サービス会社「日本レンタル保証株式会社」設立</td>\r\n						</tr>\r\n						<tr>\r\n							<th>12月</th>\r\n							<td>東京証券取引所市場第一部指定</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">2008年<br>(平成20年)</th>\r\n							<th>3月</th>\r\n							<td>アセットソリューション営業部 設置<br>コンサルティング営業部 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\" rowspan=\"2\">2011年<br>(平成23年)</th>\r\n							<th>2月</th>\r\n							<td>リテール営業部 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th>11月</th>\r\n							<td>Brillia武蔵小杉仲介センター（現：武蔵小杉支店） 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">2012年<br>(平成24年)</th>\r\n							<th>1月</th>\r\n							<td>「ソリューション営業本部」 設置<br> 法人営業第一部及び法人営業第二部 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">2014年<br>(平成26年)</th>\r\n							<th>5月</th>\r\n							<td>東京湾岸仲介センター（現：東京湾岸支店） 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\" rowspan=\"4\">2015年<br>(平成27年)</th>\r\n							<th>4月</th>\r\n							<td>東京都中央区に本社を移転</td>\r\n						</tr>\r\n						<tr>\r\n							<th>6月</th>\r\n							<td>東京証券取引所市場第一部上場廃止</td>\r\n						</tr>\r\n						<tr>\r\n							<th>7月</th>\r\n							<td>「東京建物株式会社」による100%子会社化<br>「東京建物株式会社」のCRE戦略支援機能を当社へ移管</td>\r\n						</tr>\r\n						<tr>\r\n							<th>10月</th>\r\n							<td>販売受託事業を「東京建物株式会社」へ移管</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\" rowspan=\"3\">2016年<br>(平成28年)</th>\r\n							<th>1月</th>\r\n							<td>営業推進部及び社宅営業部　設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th>2月</th>\r\n							<td>横浜磯子仲介センター（現：横浜磯子支店） 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th>9月</th>\r\n							<td>池袋支店 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">2017年<br>(平成29年)</th>\r\n							<th>11月</th>\r\n							<td>目黒支店 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">2018年<br>(平成30年)</th>\r\n							<th>2月</th>\r\n							<td>新宿仲介センター（現：新宿支店） 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\" rowspan=\"2\">2019年<br>(平成31年)</th>\r\n							<th>1月</th>\r\n							<td>流通営業本部・ソリューション営業本部を流通営業本部・アセットソリューション営業本部に再編<br>情報推進部 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th>2月</th>\r\n							<td>法人営業第三部 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\" rowspan=\"2\">2021年<br>(令和3年)</th>\r\n							<th>5月</th>\r\n							<td>大井町仲介センター（現：大井町支店） 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th>9月</th>\r\n							<td>上野池之端支店 設置</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">2022年<br>(令和4年)</th>\r\n							<th>1月</th>\r\n							<td>アセットソリューション営業部を資産情報開発部・資産運用部に再編<br>投資商品開発部 設置\r\n								<br>豊洲支店 設置\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<th class=\"title\">2023年<br>(令和5年)</th>\r\n							<th>2月</th>\r\n							<td>白金高輪支店 設置</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n\r\n				<ul class=\"list-notes notes-table_history\">\r\n					<li>当社の前身は株式会社グリル蘭（1954年(昭和29年)1月設立。1973年(昭和48年)10月に八重洲産業株式会社と改称）でありますが、当社事業開始以前は実質的な事業活動を行っていなかったため、\r\n						実質的な創業である東建住宅サービス株式会社の事業開始以降について記載しております。</li>\r\n				</ul>\r\n\r\n			</div>\r\n		</div>',1,1,'2023-07-09 17:23:24','2023-07-09 21:31:32'),(13,1,'content / 04','ORGANIZATION',19,'storage/files/file-2023-07-10-64ab6c1155aaa.jpg','組織図','組織図','Organization','<link rel=\"stylesheet\" type=\"text/css\" href=\"/index2/css/company/organization.css\" />\r\n<div class=\"content_block width_full clearfix\">\r\n			<div class=\"block_inner content1\">\r\n				<h2 class=\"content_title\">\r\n					<span class=\"title-ja\">東京建物不動産販売　組織図</span>\r\n					<span class=\"title-en\">Organization</span>\r\n				</h2>\r\n\r\n				<div class=\"enclose\">\r\n\r\n					<ul class=\"items\">\r\n						<li>\r\n							<a href=\"https://www.ttfuhan.co.jp/pdf/company/organization/soshikizu20230202.pdf\" target=\"_blank\" class=\"pdf\">印刷用<span>（PDFファイル）</span></a>\r\n						</li>\r\n					</ul>\r\n\r\n					<img alt=\"組織図\" src=\"https://www.ttfuhan.co.jp/img/company/organization/soshikizu20230202.jpg\" caption=\"false\" class=\"img\">\r\n\r\n				</div>\r\n\r\n			</div>\r\n		</div>',1,1,'2023-07-09 17:25:21','2023-07-09 21:32:44'),(14,1,'content / 05','NEWS RELEASE',20,'storage/files/file-2023-07-10-64ab6c806a40e.jpg','ニュースリリース','ニュースリリース','News Release','<script type=\"text/javascript\">\r\nwindow.location.href=\"/news\";\r\n</script>',1,1,'2023-07-09 17:27:12','2023-07-09 21:54:02'),(15,1,'content / 06','BUSINESS',66,'','事業案内','事業案内','Business','<link rel=\"stylesheet\" type=\"text/css\" href=\"/index2/css/company/business.css\" />\r\n<div class=\"content_block width_full clearfix\">\r\n			<div class=\"block_inner content1\">\r\n				<h2 class=\"content_title\">\r\n					<span class=\"title-ja\">事業案内</span>\r\n					<span class=\"title-en\">Business information</span>\r\n				</h2>\r\n\r\n				<div class=\"introduction_statement clearfix\">\r\n					<p>\r\n						東京建物グループのビジネスフィールドは不動産開発をはじめ多岐にわたります。\r\n						<br>当社が担う役割とそれを支える３つの事業をご紹介します。\r\n					</p>\r\n				</div>\r\n\r\n				<div class=\"img-txt yakuwari clearfix\">\r\n					<div class=\"img-area\">\r\n						<img src=\"http://lyc.com/index2/img/company/business/maru.png\" alt=\"東京建物不動産販売の役割\">\r\n					</div>\r\n					<div class=\"txt-area\">\r\n						<h3 class=\"yakuwari-title\">\r\n							<span class=\"title\">東京建物不動産販売の役割</span>\r\n						</h3>\r\n						<div class=\"txts txt-legible\">\r\n							<p>当社は東京建物グループのアセットサービス事業を担うセクションとして主要エリアに店舗を構え、\r\n								<br>売買仲介・アセットソリューション・賃貸管理を軸に事業を展開しております。\r\n							</p>\r\n							<div class=\"link_button_wrap\">\r\n								<a href=\"javascript:void(0);\" class=\"link_button\"><span class=\"button_label two\">東京建物グループのビジネスフィールドはこちら <i class=\"far fa-window-restore\"></i>\r\n										<br><span class=\"mini_txt\">（「東京建物コーポレートサイト」に移動します）</span></span></a>\r\n							</div>\r\n						</div>\r\n					</div>\r\n				</div>\r\n\r\n				<div class=\"list_wrap\">\r\n					<ul class=\"list-normal_card\" style=\"pointer-events: none\">\r\n\r\n						<li class=\"item-normal_card\">\r\n							<a href=\"http://lyc.com/company2/business/chukai\">\r\n								<div class=\"img_wrap\">\r\n									<img src=\"http://lyc.com/index2/img/company/business/normal_card1-1.jpg\" alt=\"仲介事業\">\r\n								</div>\r\n								<p class=\"normal_card-title\">\r\n									<span>仲介事業</span>\r\n								</p>\r\n								<p class=\"info_txt\">\r\n									個人・法人のお客様の不動産売買ニーズにお応えする仲介事業を展開しています。住まいの他、投資用不動産・事業用不動産を取り扱いし、コンサルティングも承っております。\r\n								</p>\r\n							</a>\r\n						</li>\r\n\r\n						<li class=\"item-normal_card\">\r\n							<a href=\"http://lyc.com/company2/business/solution\">\r\n								<div class=\"img_wrap\">\r\n									<img src=\"http://lyc.com/index2/img/company/business/normal_card1-2.jpg\" alt=\"アセットソリューション事業\">\r\n								</div>\r\n								<p class=\"normal_card-title\">\r\n									<span>アセットソリューション事業</span>\r\n								</p>\r\n								<p class=\"info_txt\">\r\n									ファンドへの出資・アセットマネジメントの他、様々なアセットタイプを取得しリノベーション等により不動産の付加価値を向上させて再販する事業や、投資家向けの賃貸マンション・ホテルの開発等を行っています。\r\n								</p>\r\n							</a>\r\n						</li>\r\n\r\n						<li class=\"item-normal_card\">\r\n							<a href=\"http://lyc.com/company2/business/chintai\">\r\n								<div class=\"img_wrap\">\r\n									<img src=\"http://lyc.com/index2/img/company/business/normal_card1-3.jpg\" alt=\"賃貸事業\">\r\n								</div>\r\n								<p class=\"normal_card-title\">\r\n									<span>賃貸事業</span>\r\n								</p>\r\n								<p class=\"info_txt\">\r\n									賃貸マンション・オフィス等の”賃貸管理”や企業様の借上社宅に関する業務を代行する”社宅管理代行”を承っております。当社は賃貸管理を通じてオーナー様の資産形成・賃貸マンション経営を支えてまいります。\r\n								</p>\r\n							</a>\r\n						</li>\r\n					</ul>\r\n				</div>\r\n			</div>\r\n		</div>',1,1,'2023-07-09 17:29:00','2023-07-20 20:54:15');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `career`
--

DROP TABLE IF EXISTS `career`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `career` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'job type 1 新卒採用　2 キャリア採用',
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `requirement` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `work_place` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `work_time` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `rest_time` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `salary` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 off 1 publish',
  `show_rank` int NOT NULL DEFAULT '0' COMMENT '表示順',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `career`
--

LOCK TABLES `career` WRITE;
/*!40000 ALTER TABLE `career` DISABLE KEYS */;
INSERT INTO `career` VALUES (2,1,'aaaaaaaaa','bbbbbbbbbb','cccccccccccc\r\ndddddddddd','eeeeeeeeee\r\nffffffffffff','ggggggggggg\r\nhhhhh','eeeeeeeeeeee','ffffffffffffffff\r\neeeeeeeeee',1,1,'2023-07-20 17:24:02','2023-07-20 17:24:02'),(3,1,'bbbbbbbbbbb','eeeeeeeeeeeeeeee','ggggggggggggg\r\nddddddddddddddddd','ggggggggggggg','eeeeeeeeeeeeee','gggggggggggg','dddddddddddddddd',1,1,'2023-07-20 17:24:17','2023-07-20 17:24:17');
/*!40000 ALTER TABLE `career` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_post`
--

DROP TABLE IF EXISTS `category_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_post` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int unsigned NOT NULL,
  `post_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_post`
--

LOCK TABLES `category_post` WRITE;
/*!40000 ALTER TABLE `category_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` int NOT NULL,
  `commentable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `parent` int NOT NULL DEFAULT '0',
  `parent_id` int DEFAULT NULL,
  `approved` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_info`
--

DROP TABLE IF EXISTS `company_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_info` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 off 1 publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_info`
--

LOCK TABLES `company_info` WRITE;
/*!40000 ALTER TABLE `company_info` DISABLE KEYS */;
INSERT INTO `company_info` VALUES (2,'philosophy','a:13:{s:5:\"title\";s:13:\"企業理念2\";s:8:\"title_en\";s:24:\"Corporate philosophyeeee\";s:12:\"middle_title\";s:30:\"「信頼・創造・未来」\";s:14:\"middle_content\";s:119:\"私たちは　お客様の信頼を最高価値として\r\n日々創造を続け　輝かしい未来を目指します\";s:12:\"bottom_title\";s:17:\"ごあいさつaa\";s:15:\"bottom_title_en\";s:9:\"Greetingt\";s:15:\"bottom_image_id\";i:68;s:17:\"bottom_image_link\";s:47:\"storage/files/file-2023-07-21-64ba21ee50d3e.jpg\";s:18:\"bottom_image_intro\";s:52:\"代表取締役 社長執行役員　福居　賢悟\";s:14:\"bottom_content\";s:1910:\"弊社は「信頼・創造・未来」という企業理念のもと、お客様の不動産に関するさまざまなニーズにお応えしてまいりました。\r\n\r\n世の中の変化はめまぐるしく、不動産を取り巻く環境も常に変化しています。私たちが取り扱う不動産という商品は、一般的な量産品とは異なり、唯一無二のものであり、きわめて高価なものです。そのため、売買・賃貸などの取引を成立させるには、お客様の「信頼」が欠かせません。\r\n\r\nその信頼を得るためには、お客様の不動産に関わるさまざまなご要望を的確にキャッチし、弊社にしかできない商品やサービスを「創造」していくことが必要です。\r\n弊社は東京建物グループの一員として、グループの多彩な事業から最適なソリューションを導き出し、東京建物グループだからこそ実現可能である総合的な提案を行ってまいります。\r\n\r\n東京建物グループでは、2030年頃を見据えた長期ビジョン「次世代デベロッパーへ」を掲げています。\r\n弊社では、「仲介事業」「アセットソリューション事業」「賃貸事業」の３つの事業を通じて不動産に新しい価値を付加することにより、お客様のニーズにお応えすることで、「社会課題の解決」と「企業としての成長」をより高い次元で実現することを目指してまいります。\r\nそして、お客様の信頼を最高価値として、日々創造を続け、「未来」を切り拓いていくという姿勢を変えることなくいつの時代も続けてまいります。\r\n\r\n今後とも弊社および東京建物グループの活動にご期待いただきますよう、お願い申し上げます。\r\n\r\n\r\nddddddddddddddddddddd\";s:14:\"cover_image_id\";i:84;s:16:\"cover_image_link\";s:48:\"storage/files/file-2023-07-21-64ba4c48273a4.jpeg\";s:17:\"cover_image_intro\";s:33:\"企業理念・ごあいさつ222\";}',1,'2023-07-18 23:57:37','2023-07-21 00:13:44'),(4,'outline','a:17:{s:5:\"title\";s:12:\"会社概要\";s:8:\"title_en\";s:7:\"Outline\";s:12:\"company_name\";s:84:\"東京建物不動産販売株式会社\r\n(Tokyo Tatemono Real Estate Sales Co.,Ltd.)\";s:14:\"company_adress\";s:77:\"東京都中央区八重洲1-5-20\r\n東京建物八重洲さくら通りビル\";s:17:\"legal_person_code\";s:13:\"3011101015098\";s:10:\"login_code\";s:17:\"T3-0111-0101-5098\";s:3:\"tel\";s:24:\"03-6837-7700（代表）\";s:16:\"register_capital\";s:8:\"43億円\";s:14:\"establish_time\";s:16:\"1980年5月17日\";s:14:\"employee_count\";s:35:\"423名（2022年12月31日現在）\";s:12:\"legal_person\";s:48:\"代表取締役 社長執行役員 福居 賢悟\";s:14:\"license_number\";s:37:\"国土交通大臣（11） 第2885号\";s:16:\"business_content\";s:69:\"仲介事業、アセットソリューション事業、賃貸事業\";s:10:\"membership\";s:217:\"（一社）不動産協会、（一社）不動産流通経営協会、（公社）首都圏不動産公正取引協議会、\r\n（一社）日本投資顧問業協会、（一社）不動産証券化協会(準会員)\";s:14:\"cover_image_id\";i:69;s:16:\"cover_image_link\";s:48:\"storage/files/file-2023-07-21-64ba22a35f1a2.jpeg\";s:17:\"cover_image_intro\";s:12:\"会社概要\";}',1,'2023-07-19 04:24:51','2023-07-20 21:16:03'),(7,'history','a:8:{s:5:\"title\";s:6:\"沿革\";s:8:\"title_en\";s:7:\"History\";s:12:\"middle_title\";s:133:\"1980年、東京建物の不動産流通部門を担って発足。不動産流通分野で幅広い事業を展開しています。\";s:13:\"company_story\";a:2:{i:2012;a:2:{i:3;a:2:{i:0;s:87:\"東京都新宿区に「東建住宅サービス株式会社」として営業を開始\";i:1;s:19:\"横浜支店 設置\";}i:10;a:1:{i:0;s:22:\"津田沼支店 設置\";}}i:2023;a:2:{i:1;a:1:{i:0;s:55:\"「管理本部（現：経営管理本部）」 設置\";}i:10;a:1:{i:0;s:117:\"営業部門に「住宅営業本部」「賃貸営業本部」「流通営業本部」の各営業本部制を導入\";}}}s:14:\"bottom_content\";s:377:\"当社の前身は株式会社グリル蘭（1954年(昭和29年)1月設立。1973年(昭和48年)10月に八重洲産業株式会社と改称）でありますが、当社事業開始以前は実質的な事業活動を行っていなかったため、 実質的な創業である東建住宅サービス株式会社の事業開始以降について記載しております。\";s:14:\"cover_image_id\";i:70;s:16:\"cover_image_link\";s:48:\"storage/files/file-2023-07-21-64ba23496e1f3.jpeg\";s:17:\"cover_image_intro\";s:6:\"沿革\";}',1,'2023-07-19 16:30:10','2023-07-20 21:22:22'),(8,'organization','a:9:{s:5:\"title\";s:39:\"東京建物不動産販売　組織図\";s:8:\"title_en\";s:12:\"Organization\";s:21:\"organization_image_id\";i:72;s:23:\"organization_image_link\";s:48:\"storage/files/file-2023-07-21-64ba24bb43f00.jpeg\";s:20:\"organization_file_id\";i:73;s:22:\"organization_file_link\";s:48:\"storage/files/file-2023-07-21-64ba24bb67c0f.jpeg\";s:14:\"cover_image_id\";i:71;s:16:\"cover_image_link\";s:48:\"storage/files/file-2023-07-21-64ba24bb40139.jpeg\";s:17:\"cover_image_intro\";s:9:\"組織図\";}',1,'2023-07-19 16:53:03','2023-07-20 21:32:11'),(10,'business','a:13:{s:5:\"title\";s:12:\"事業案内\";s:8:\"title_en\";s:20:\"Business information\";s:12:\"middle_title\";s:194:\"東京建物グループのビジネスフィールドは不動産開発をはじめ多岐にわたります。\r\n当社が担う役割とそれを支える３つの事業をご紹介します。\";s:15:\"middle_image_id\";i:75;s:17:\"middle_image_link\";s:47:\"storage/files/file-2023-07-21-64ba283d0318e.png\";s:18:\"middle_right_title\";s:36:\"東京建物不動産販売の役割\";s:20:\"middle_right_content\";s:245:\"当社は東京建物グループのアセットサービス事業を担うセクションとして主要エリアに店舗を構え、\r\n売買仲介・アセットソリューション・賃貸管理を軸に事業を展開しております。\";s:25:\"middle_right_bottom_title\";s:66:\"東京建物グループのビジネスフィールドはこちら\";s:27:\"middle_right_bottom_content\";s:69:\"（「東京建物コーポレートサイト」に移動します）\";s:7:\"bottoms\";a:3:{i:0;a:4:{s:12:\"bottom_title\";s:12:\"仲介事業\";s:14:\"bottom_content\";s:240:\"個人・法人のお客様の不動産売買ニーズにお応えする仲介事業を展開しています。住まいの他、投資用不動産・事業用不動産を取り扱いし、コンサルティングも承っております。\";s:15:\"bottom_image_id\";i:76;s:17:\"bottom_image_link\";s:47:\"storage/files/file-2023-07-21-64ba283d13fa7.jpg\";}i:1;a:4:{s:12:\"bottom_title\";s:39:\"アセットソリューション事業\";s:14:\"bottom_content\";s:294:\"ファンドへの出資・アセットマネジメントの他、様々なアセットタイプを取得しリノベーション等により不動産の付加価値を向上させて再販する事業や、投資家向けの賃貸マンション・ホテルの開発等を行っています。\";s:15:\"bottom_image_id\";i:77;s:17:\"bottom_image_link\";s:47:\"storage/files/file-2023-07-21-64ba283d2080b.jpg\";}i:2;a:4:{s:12:\"bottom_title\";s:12:\"賃貸事業\";s:14:\"bottom_content\";s:294:\"賃貸マンション・オフィス等の”賃貸管理”や企業様の借上社宅に関する業務を代行する”社宅管理代行”を承っております。当社は賃貸管理を通じてオーナー様の資産形成・賃貸マンション経営を支えてまいります。\";s:15:\"bottom_image_id\";i:78;s:17:\"bottom_image_link\";s:47:\"storage/files/file-2023-07-21-64ba283d2c17b.jpg\";}}s:14:\"cover_image_id\";i:74;s:16:\"cover_image_link\";s:48:\"storage/files/file-2023-07-21-64ba283cf2d62.jpeg\";s:17:\"cover_image_intro\";s:12:\"事業案内\";}',1,'2023-07-19 18:03:06','2023-07-21 00:16:41'),(11,'release','a:5:{s:5:\"title\";s:24:\"ニュースリリース\";s:8:\"title_en\";s:12:\"News Release\";s:14:\"cover_image_id\";i:81;s:16:\"cover_image_link\";s:48:\"storage/files/file-2023-07-21-64ba2b9d699f6.jpeg\";s:17:\"cover_image_intro\";s:24:\"ニュースリリース\";}',1,'2023-07-19 19:20:01','2023-07-20 21:54:21');
/*!40000 ALTER TABLE `company_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_info_zh`
--

DROP TABLE IF EXISTS `company_info_zh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_info_zh` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 off 1 publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_info_zh`
--

LOCK TABLES `company_info_zh` WRITE;
/*!40000 ALTER TABLE `company_info_zh` DISABLE KEYS */;
INSERT INTO `company_info_zh` VALUES (1,'indexzh','a:7:{s:7:\"name_zh\";s:19:\"公司信息首页2\";s:5:\"title\";s:7:\"致辞2\";s:17:\"bottom_title_left\";s:16:\"董事总经理2\";s:18:\"bottom_title_right\";s:14:\"福居 賢悟2\";s:15:\"bottom_image_id\";i:85;s:17:\"bottom_image_link\";s:47:\"storage/files/file-2023-07-24-64be43d1d2045.jpg\";s:14:\"bottom_content\";s:2112:\"本公司的企业理念\"信赖、创造、未来\"，是我们一贯坚持的工作态度的真实表达。\r\n我们所经营的\"不动产\"这一商品，是和一般大量生产的商品完全不同的、独一无二的商品，是极其高档的商品。因此，为了达成买卖、租赁等的交易，客户的\"信赖\"是不可或缺的。而且，为了获得这份信赖，我们将时刻站在客户的立场，并不断\"创造\"出客户所需的商品和服务。那么，我们坚信通过将这一循环的持续，就能实现面向\"未来\"的永久延续的发展。\r\n随着时代的变迁，客户的价值观和需求每时每刻都在变化。本公司将准确捕获这些变化，并作出及时灵活的对应。此外，我们视客户的信赖为最重要的价值，坚持每天创造、不断开创未来的态度从未改变，无论任何时代都会一直传承下去。\r\n伴随着2015年度东京建物集团的业务重组，本公司中止了上市，并迎来了崭新的开始。至此，我们与东京建物以及集团公司的协作更加密切深入，并构建了得以充分发挥东京建物集团的综合力量的完善体制。\r\n尤其是本公司作为不动产流通业，因为拥有店铺，所以与客户直接接触的机会很多，发挥着担当集团公司整体窗口的重要作用。面对客户的需求，我们将从集团丰富多彩的项目中精选最佳解决方案，为客户提供一站式综合性的提议。另一方面，我们会听取客户真实的声音，并通过将此信息传递给集团各公司，为打造领先时代的商品和服务而作出贡献。我们深信，通过本公司所起的连接客户与集团各公司间的枢纽功能，能够使集团整体得以优化，更有力地发挥业务的相乘效果。\r\n东京建物不动产贩卖，作为东京建物集团的最前沿企业，将真诚面对每一位客户，为给您带来前所未有的喜悦、得到您满意的评价，而坚持不懈的进行具有魅力的提案。\r\n今后也敬请期待本公司以及东京建物集团的飞跃发展，谢谢。2\";}',1,'2023-07-24 00:26:41','2023-07-24 00:57:01'),(3,'corporatezh','a:13:{s:7:\"name_zh\";s:22:\"公司概要・沿革2\";s:13:\"title_outline\";s:13:\"公司概要2\";s:12:\"company_name\";s:41:\"东京建物不动产贩卖株式会社22\";s:14:\"company_adress\";s:73:\"东京都中央区八重洲1-5-20　东京建物八重洲樱花街大厦2\";s:7:\"capital\";s:12:\"43亿日元2\";s:7:\"revenue\";s:35:\"28,538百万日元（2022年度）2\";s:14:\"establish_time\";s:17:\"1980年5月17日2\";s:12:\"legal_person\";s:32:\"董事总经理　福居 賢悟2\";s:8:\"business\";s:67:\"中介事业、资产管理解決法案事业、租赁管理事业2\";s:11:\"affiliation\";s:284:\"（一般社团法人）不动产协会、（一般社团法人）不动产流通经营协会、\r\n（公益社团法人）首都圈不动产公正交易协议会、（一般社团法人）日本投资顾问业协会、\r\n（一般社团法人）不动产证券化协会（准会员）2\";s:14:\"mother_company\";s:25:\"东京建物株式会社2\";s:13:\"title_history\";s:7:\"沿革2\";s:13:\"company_story\";a:3:{i:2018;s:75:\"在东京都新宿区成立\"东建住宅服务株式会社\"，开始营业2\";i:2019;s:45:\"在东京证券交易所市场第二部上市\";i:2023;s:51:\"改名为\"东京建物不动产贩卖株式会社\"2\";}}',1,'2023-07-24 01:11:10','2023-07-24 01:13:09'),(4,'disclaimerzh','a:3:{s:7:\"name_zh\";s:13:\"免责事项2\";s:5:\"title\";s:13:\"免责事项2\";s:14:\"middle_content\";s:532:\"本公司运营网站所载各种内容，是根据编写当时认为可信任的各种信息和数据编写而成的，因此不能保证其准确性、相当性及完整性。此外，在主页文章中所记载的事项，可能会在不另行通知的情况下进行更改或中止，敬请谅解。另外，关于通过上述网站所链接到的其他网站，对该网站所载信息的准确性、合法性不予以保证。万一在使用链接的网站时出现问题，该责任应由链接网站承担，敬请知悉。2\";}',1,'2023-07-24 01:14:14','2023-07-24 01:18:48'),(5,'profilezh','a:4:{s:7:\"name_zh\";s:13:\"业务指南2\";s:5:\"title\";s:13:\"业务指南2\";s:14:\"middle_content\";s:294:\"东京建物不动产贩卖，将拥有120年历史的东京建物和集团各公司的综合力量进行有效地发挥，为您提供一站式的最佳解决方案。\r\n我们将协同各个不同领域的专家们，针对与不动产相关的所有需求，提供最适当的服务建议。2\";s:8:\"business\";a:3:{i:0;a:5:{s:4:\"name\";s:13:\"中介事业2\";s:5:\"title\";s:94:\"听取您的想法，帮您找到中意物件，办公室、店铺、住宅的中介业务。2\";s:7:\"content\";s:382:\"为法人客户提供不动产需求的支持的\"面向法人的中介\"，以及应对个人客户更换住处需求的\"面向个人的中介\"等，我们将针对客户的各种不同的需求提供精心细致的服务。\r\n为您提供丰富与及时的物件信息自不待言，我们还将以完善的体制在调查、合同签订乃至售后跟进方面全面地支持您。2\";s:8:\"image_id\";i:86;s:10:\"image_link\";s:47:\"storage/files/file-2023-07-24-64be53b451ca0.png\";}i:1;a:5:{s:4:\"name\";s:31:\"資產管理解決方案事業2\";s:5:\"title\";s:85:\"最大限度地发挥不动产的潜力，资产管理解決法案事业的力量。2\";s:7:\"content\";s:259:\"灵活运用本公司的强项，即在法人中介中培养出来的鉴别能力对不动产进行选定、获取，凭借东京建物集团所拥有的经营技巧等丰富多样的方法提高其附加价值和盈利能力，从而开展转卖的业务。2\";s:8:\"image_id\";i:87;s:10:\"image_link\";s:47:\"storage/files/file-2023-07-24-64be53b457cf8.png\";}i:2;a:5:{s:4:\"name\";s:19:\"租赁管理事业2\";s:5:\"title\";s:97:\"经验和实绩是不可或缺的。以丰富多样的租赁技巧为您提供全面的支持。2\";s:7:\"content\";s:359:\"为了形成稳定的资产，该如何有效地运用所拥有的不动产呢？现在是不动产会因不同的运用方式而产生很大差别的时代。\r\n我们将为您的中长期资产的形成，以及作为您业务后盾的租赁公寓、办公大厦的经营管理提供总体性的支持。\r\n以此协助您创建一个无忧无虑的明天。2\";s:8:\"image_id\";i:88;s:10:\"image_link\";s:47:\"storage/files/file-2023-07-24-64be53b45cc90.png\";}}}',1,'2023-07-24 01:34:28','2023-07-24 01:37:03');
/*!40000 ALTER TABLE `company_info_zh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configs`
--

DROP TABLE IF EXISTS `configs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `configs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configs`
--

LOCK TABLES `configs` WRITE;
/*!40000 ALTER TABLE `configs` DISABLE KEYS */;
/*!40000 ALTER TABLE `configs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_info`
--

DROP TABLE IF EXISTS `contact_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_info` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 off 1 publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_info`
--

LOCK TABLES `contact_info` WRITE;
/*!40000 ALTER TABLE `contact_info` DISABLE KEYS */;
INSERT INTO `contact_info` VALUES (4,'contact','a:6:{s:15:\"wechat_image_id\";i:64;s:17:\"wechat_image_link\";s:47:\"storage/files/file-2023-07-21-64ba06b2ef8bc.png\";s:12:\"wechat_intro\";s:30:\"wagaya Japan Official Account1\";s:13:\"line_image_id\";i:65;s:15:\"line_image_link\";s:47:\"storage/files/file-2023-07-21-64ba06b2f144d.png\";s:10:\"line_intro\";s:30:\"wagaya Japan Official Account2\";}',1,'2023-07-20 19:16:51','2023-07-20 20:39:45');
/*!40000 ALTER TABLE `contact_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feature_property`
--

DROP TABLE IF EXISTS `feature_property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feature_property` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `feature_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feature_property`
--

LOCK TABLES `feature_property` WRITE;
/*!40000 ALTER TABLE `feature_property` DISABLE KEYS */;
/*!40000 ALTER TABLE `feature_property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `features` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `features`
--

LOCK TABLES `features` WRITE;
/*!40000 ALTER TABLE `features` DISABLE KEYS */;
/*!40000 ALTER TABLE `features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file_upload`
--

DROP TABLE IF EXISTS `file_upload`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `file_upload` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `file_type` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `file_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `file_ext` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `file_md5` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `file_size` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `businuss_id` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_md5` (`file_md5`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file_upload`
--

LOCK TABLES `file_upload` WRITE;
/*!40000 ALTER TABLE `file_upload` DISABLE KEYS */;
INSERT INTO `file_upload` VALUES (2,'image/jpeg','file-2023-07-07-64a7d4e9e5e51.jpg','jpg','a5787b92461f3a46cb87267c7bba4f3e','501341','storage/files/file-2023-07-07-64a7d4e9e5e51.jpg',1,'2023-07-07 00:03:38','2023-07-07 00:03:38'),(3,'image/jpeg','file-2023-07-07-64a80ed41cae6.jpg','jpg','535e26bc6d901d5069a5b6e1e5c76ba5','474652','files/file-2023-07-07-64a80ed41cae6.jpg',1,'2023-07-07 04:10:44','2023-07-07 04:10:44'),(4,'image/jpeg','file-2023-07-09-64aa65406115c.jpg','jpg','75d6cb0143f3dcbd643a1feef7832fcd','817290','storage/files/file-2023-07-09-64aa65406115c.jpg',1,'2023-07-08 22:44:00','2023-07-08 22:44:00'),(5,'image/jpeg','file-2023-07-09-64aa657339992.jpg','jpg','75d6cb0143f3dcbd643a1feef7832fcd','817290','storage/files/file-2023-07-09-64aa657339992.jpg',1,'2023-07-08 22:44:51','2023-07-08 22:44:51'),(10,'application/pdf','file-2023-07-09-64aa6b26902a2.pdf','pdf','8891831b942b46cf7c4726cec9154092','30984','storage/files/file-2023-07-09-64aa6b26902a2.pdf',1,'2023-07-08 23:09:10','2023-07-08 23:09:10'),(11,'text/plain','file-2023-07-09-64aa7e895e9b8.csv','csv','76d7d8453a24dacd193e6e38909e8fd8','2194','storage/files/file-2023-07-09-64aa7e895e9b8.csv',1,'2023-07-08 23:10:27','2023-07-09 00:31:53'),(12,'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet','file-2023-07-09-64aa6b73853cc.xlsx','xlsx','6597453f65b6792323f2420b39f0075e','15318','storage/files/file-2023-07-09-64aa6b73853cc.xlsx',1,'2023-07-08 23:10:27','2023-07-08 23:10:27'),(13,'text/html','file-2023-07-09-64aa6b7386232.html','html','9c25e0ed3e4b6d7c6ace5021ea7bc809','1330','storage/files/file-2023-07-09-64aa6b7386232.html',1,'2023-07-08 23:10:27','2023-07-08 23:10:27'),(14,'video/mp4','file-2023-07-09-64aa8da28bd60.mp4','mp4','7e15c3fd9cf6ed88c2b48fc5859f7aae','3454964','storage/files/file-2023-07-09-64aa8da28bd60.mp4',1,'2023-07-09 01:36:18','2023-07-09 01:36:18'),(15,'image/jpeg','file-2023-07-09-64aaa0ed58f9a.jpg','jpg','4cc39a7c4cef9fabc04722b42f59c28c','175239','files/file-2023-07-09-64aaa0ed58f9a.jpg',1,'2023-07-09 02:58:37','2023-07-09 02:58:37'),(16,'image/jpeg','file-2023-07-10-64ab6a8da4538.jpg','jpg','302619930358815f6a0a3601df001309','79981','storage/files/file-2023-07-10-64ab6a8da4538.jpg',1,'2023-07-09 17:18:53','2023-07-09 17:18:53'),(17,'image/jpeg','file-2023-07-10-64ab6b1bbf7ca.jpg','jpg','afbaf03f19ec78df5d7d9fda54dd47f0','145989','storage/files/file-2023-07-10-64ab6b1bbf7ca.jpg',1,'2023-07-09 17:21:15','2023-07-09 17:21:15'),(18,'image/jpeg','file-2023-07-10-64ab6b9c23dcc.jpg','jpg','a7f624ec0dd5c5ed6f21210a3856dd97','49488','storage/files/file-2023-07-10-64ab6b9c23dcc.jpg',1,'2023-07-09 17:23:24','2023-07-09 17:23:24'),(19,'image/jpeg','file-2023-07-10-64ab6c1155aaa.jpg','jpg','eafe62162729e970ccb88fd7a96fbaa3','75693','storage/files/file-2023-07-10-64ab6c1155aaa.jpg',1,'2023-07-09 17:25:21','2023-07-09 17:25:21'),(20,'image/jpeg','file-2023-07-10-64ab6c806a40e.jpg','jpg','f99ede6c1116c3ef9bf68c48294a4f15','61098','storage/files/file-2023-07-10-64ab6c806a40e.jpg',1,'2023-07-09 17:27:12','2023-07-09 17:27:12'),(21,'image/jpeg','file-2023-07-10-64ab6cec673fb.jpg','jpg','29084ac367342c45cee0191eca22eedc','203456','storage/files/file-2023-07-10-64ab6cec673fb.jpg',1,'2023-07-09 17:29:00','2023-07-09 17:29:00'),(22,'image/png','file-2023-07-14-64b1032e1eaba.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-14-64b1032e1eaba.jpg',1,'2023-07-13 23:11:26','2023-07-13 23:11:26'),(23,'image/jpeg','file-2023-07-19-64b79d3ecf085.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-19-64b79d3ecf085.jpg',1,'2023-07-18 23:22:22','2023-07-18 23:22:22'),(24,'image/png','file-2023-07-19-64b79d3ef409e.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-19-64b79d3ef409e.jpg',1,'2023-07-18 23:22:23','2023-07-18 23:22:23'),(25,'image/jpeg','file-2023-07-19-64b7a5816b9d7.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-19-64b7a5816b9d7.jpg',1,'2023-07-18 23:57:37','2023-07-18 23:57:37'),(26,'image/png','file-2023-07-19-64b7a58188178.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-19-64b7a58188178.jpg',1,'2023-07-18 23:57:37','2023-07-18 23:57:37'),(27,'image/png','file-2023-07-19-64b7b1b917efa.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-19-64b7b1b917efa.jpg',1,'2023-07-19 00:49:45','2023-07-19 00:49:45'),(28,'image/jpeg','file-2023-07-19-64b7b1b93128a.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-19-64b7b1b93128a.jpg',1,'2023-07-19 00:49:45','2023-07-19 00:49:45'),(29,'image/png','file-2023-07-19-64b7b2274f2db.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-19-64b7b2274f2db.jpg',1,'2023-07-19 00:51:35','2023-07-19 00:51:35'),(30,'image/jpeg','file-2023-07-19-64b7b227674dd.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-19-64b7b227674dd.jpg',1,'2023-07-19 00:51:35','2023-07-19 00:51:35'),(31,'image/png','file-2023-07-19-64b7b2493389b.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-19-64b7b2493389b.jpg',1,'2023-07-19 00:52:09','2023-07-19 00:52:09'),(32,'image/jpeg','file-2023-07-19-64b7b2494d606.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-19-64b7b2494d606.jpg',1,'2023-07-19 00:52:09','2023-07-19 00:52:09'),(33,'image/png','file-2023-07-19-64b7e42346cf7.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-19-64b7e42346cf7.jpg',1,'2023-07-19 04:24:51','2023-07-19 04:24:51'),(34,'image/jpeg','file-2023-07-20-64b883f96dc69.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-20-64b883f96dc69.jpg',1,'2023-07-19 15:46:49','2023-07-19 15:46:49'),(35,'image/jpeg','file-2023-07-20-64b88b06cf998.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-20-64b88b06cf998.jpg',1,'2023-07-19 16:16:54','2023-07-19 16:16:54'),(36,'image/jpeg','file-2023-07-20-64b88e2292020.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-20-64b88e2292020.jpg',1,'2023-07-19 16:30:10','2023-07-19 16:30:10'),(37,'image/jpeg','file-2023-07-20-64b890a0e7a2e.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-20-64b890a0e7a2e.jpg',1,'2023-07-19 16:40:49','2023-07-19 16:40:49'),(38,'image/png','file-2023-07-20-64b8919f66bfb.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-20-64b8919f66bfb.jpg',1,'2023-07-19 16:45:03','2023-07-19 16:45:03'),(39,'image/jpeg','file-2023-07-20-64b89351201fb.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-20-64b89351201fb.jpg',1,'2023-07-19 16:52:17','2023-07-19 16:52:17'),(40,'image/png','file-2023-07-20-64b8935136889.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-20-64b8935136889.jpg',1,'2023-07-19 16:52:17','2023-07-19 16:52:17'),(41,'image/jpeg','file-2023-07-20-64b8937ed14f6.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-20-64b8937ed14f6.jpg',1,'2023-07-19 16:53:02','2023-07-19 16:53:02'),(42,'image/png','file-2023-07-20-64b8937ee887f.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-20-64b8937ee887f.jpg',1,'2023-07-19 16:53:03','2023-07-19 16:53:03'),(43,'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet','file-2023-07-20-64b8937f0e569.xlsx','xlsx','72d89189ae4a16fe09abc93203aeb872','28940','storage/files/file-2023-07-20-64b8937f0e569.xlsx',1,'2023-07-19 16:53:03','2023-07-19 16:53:03'),(44,'image/jpeg','file-2023-07-20-64b89a4ce0e40.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-20-64b89a4ce0e40.jpg',1,'2023-07-19 17:22:05','2023-07-19 17:22:05'),(45,'image/png','file-2023-07-20-64b89a4d04274.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-20-64b89a4d04274.jpg',1,'2023-07-19 17:22:05','2023-07-19 17:22:05'),(46,'image/png','file-2023-07-20-64b89a4d21619.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-20-64b89a4d21619.jpg',1,'2023-07-19 17:22:05','2023-07-19 17:22:05'),(47,'image/jpeg','file-2023-07-20-64b89ab94d088.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-20-64b89ab94d088.jpg',1,'2023-07-19 17:23:53','2023-07-19 17:23:53'),(48,'image/png','file-2023-07-20-64b89ab963631.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-20-64b89ab963631.jpg',1,'2023-07-19 17:23:53','2023-07-19 17:23:53'),(49,'image/png','file-2023-07-20-64b89ab97d7c5.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-20-64b89ab97d7c5.jpg',1,'2023-07-19 17:23:53','2023-07-19 17:23:53'),(50,'image/png','file-2023-07-20-64b89ab99676d.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-20-64b89ab99676d.jpg',1,'2023-07-19 17:23:53','2023-07-19 17:23:53'),(51,'image/png','file-2023-07-20-64b89ab9b060d.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-20-64b89ab9b060d.jpg',1,'2023-07-19 17:23:53','2023-07-19 17:23:53'),(52,'image/jpeg','file-2023-07-20-64b8a2854427b.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-20-64b8a2854427b.jpg',1,'2023-07-19 17:57:09','2023-07-19 17:57:09'),(53,'image/jpeg','file-2023-07-20-64b8a3e98dc6c.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-20-64b8a3e98dc6c.jpg',1,'2023-07-19 18:03:05','2023-07-19 18:03:05'),(54,'image/jpeg','file-2023-07-20-64b8a3e9a49b6.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-20-64b8a3e9a49b6.jpg',1,'2023-07-19 18:03:05','2023-07-19 18:03:05'),(55,'image/png','file-2023-07-20-64b8a3e9bf8a6.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-20-64b8a3e9bf8a6.jpg',1,'2023-07-19 18:03:05','2023-07-19 18:03:05'),(56,'image/png','file-2023-07-20-64b8a3e9d8cba.jpg','jpg','e222c5c1a4c617747feb668d7255527d','45427','storage/files/file-2023-07-20-64b8a3e9d8cba.jpg',1,'2023-07-19 18:03:05','2023-07-19 18:03:05'),(57,'image/jpeg','file-2023-07-20-64b8a3e9f16ed.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-20-64b8a3e9f16ed.jpg',1,'2023-07-19 18:03:06','2023-07-19 18:03:06'),(58,'video/mp4','file-2023-07-20-64b8aa6b601a3.mp4','mp4','7e15c3fd9cf6ed88c2b48fc5859f7aae','3454964','storage/files/file-2023-07-20-64b8aa6b601a3.mp4',1,'2023-07-19 18:30:51','2023-07-19 18:30:51'),(59,'image/jpeg','file-2023-07-20-64b8b5f133772.jpg','jpg','f28a180791d5af5afe03b77cd4c29cf8','1183014','storage/files/file-2023-07-20-64b8b5f133772.jpg',1,'2023-07-19 19:20:01','2023-07-19 19:20:01'),(60,'image/png','file-2023-07-21-64ba04f87eaf9.png','png','550842a54070e1366cf19d95d727dd00','6674','storage/files/file-2023-07-21-64ba04f87eaf9.png',1,'2023-07-20 19:09:28','2023-07-20 19:09:28'),(61,'image/png','file-2023-07-21-64ba04f882f17.png','png','37b0675d3f782dcca65bcee1d4d3e786','22239','storage/files/file-2023-07-21-64ba04f882f17.png',1,'2023-07-20 19:09:28','2023-07-20 19:09:28'),(62,'image/png','file-2023-07-21-64ba0653219d0.png','png','550842a54070e1366cf19d95d727dd00','6674','storage/files/file-2023-07-21-64ba0653219d0.png',1,'2023-07-20 19:15:15','2023-07-20 19:15:15'),(63,'image/png','file-2023-07-21-64ba06532324d.png','png','37b0675d3f782dcca65bcee1d4d3e786','22239','storage/files/file-2023-07-21-64ba06532324d.png',1,'2023-07-20 19:15:15','2023-07-20 19:15:15'),(64,'image/png','file-2023-07-21-64ba06b2ef8bc.png','png','550842a54070e1366cf19d95d727dd00','6674','storage/files/file-2023-07-21-64ba06b2ef8bc.png',1,'2023-07-20 19:16:50','2023-07-20 19:16:50'),(65,'image/png','file-2023-07-21-64ba06b2f144d.png','png','37b0675d3f782dcca65bcee1d4d3e786','22239','storage/files/file-2023-07-21-64ba06b2f144d.png',1,'2023-07-20 19:16:51','2023-07-20 19:16:51'),(66,'image/jpeg','file-2023-07-21-64ba19a77638e.jpeg','jpeg','8acc64720734c205a3eb4912f2b08214','250538','storage/files/file-2023-07-21-64ba19a77638e.jpeg',1,'2023-07-20 20:37:43','2023-07-20 20:37:43'),(67,'image/jpeg','file-2023-07-21-64ba21ee4c377.jpeg','jpeg','29084ac367342c45cee0191eca22eedc','203456','storage/files/file-2023-07-21-64ba21ee4c377.jpeg',1,'2023-07-20 21:13:02','2023-07-20 21:13:02'),(68,'image/jpeg','file-2023-07-21-64ba21ee50d3e.jpg','jpg','b302aa842af775bcbe550253138ba9ba','262379','storage/files/file-2023-07-21-64ba21ee50d3e.jpg',1,'2023-07-20 21:13:02','2023-07-20 21:13:02'),(69,'image/jpeg','file-2023-07-21-64ba22a35f1a2.jpeg','jpeg','afbaf03f19ec78df5d7d9fda54dd47f0','145989','storage/files/file-2023-07-21-64ba22a35f1a2.jpeg',1,'2023-07-20 21:16:03','2023-07-20 21:16:03'),(70,'image/jpeg','file-2023-07-21-64ba23496e1f3.jpeg','jpeg','a7f624ec0dd5c5ed6f21210a3856dd97','49488','storage/files/file-2023-07-21-64ba23496e1f3.jpeg',1,'2023-07-20 21:18:49','2023-07-20 21:18:49'),(71,'image/jpeg','file-2023-07-21-64ba24bb40139.jpeg','jpeg','eafe62162729e970ccb88fd7a96fbaa3','75693','storage/files/file-2023-07-21-64ba24bb40139.jpeg',1,'2023-07-20 21:24:59','2023-07-20 21:24:59'),(72,'image/jpeg','file-2023-07-21-64ba24bb43f00.jpeg','jpeg','933749eed147bfd2659c4250d59bba8a','500079','storage/files/file-2023-07-21-64ba24bb43f00.jpeg',1,'2023-07-20 21:24:59','2023-07-20 21:24:59'),(73,'image/jpeg','file-2023-07-21-64ba24bb67c0f.jpeg','jpeg','933749eed147bfd2659c4250d59bba8a','500079','storage/files/file-2023-07-21-64ba24bb67c0f.jpeg',1,'2023-07-20 21:24:59','2023-07-20 21:24:59'),(74,'image/jpeg','file-2023-07-21-64ba283cf2d62.jpeg','jpeg','29084ac367342c45cee0191eca22eedc','203456','storage/files/file-2023-07-21-64ba283cf2d62.jpeg',1,'2023-07-20 21:39:57','2023-07-20 21:39:57'),(75,'image/png','file-2023-07-21-64ba283d0318e.png','png','5efe5170e0d2428daf6da6cd34a12016','60427','storage/files/file-2023-07-21-64ba283d0318e.png',1,'2023-07-20 21:39:57','2023-07-20 21:39:57'),(76,'image/jpeg','file-2023-07-21-64ba283d13fa7.jpg','jpg','b48c1c51ad1aab42c03daa080dc8281c','359326','storage/files/file-2023-07-21-64ba283d13fa7.jpg',1,'2023-07-20 21:39:57','2023-07-20 21:39:57'),(77,'image/jpeg','file-2023-07-21-64ba283d2080b.jpg','jpg','7e0bb54b842df30f4717cabb3230604d','239125','storage/files/file-2023-07-21-64ba283d2080b.jpg',1,'2023-07-20 21:39:57','2023-07-20 21:39:57'),(78,'image/jpeg','file-2023-07-21-64ba283d2c17b.jpg','jpg','6f8d6a42db7b5fb249cfe7fd72831c0e','242931','storage/files/file-2023-07-21-64ba283d2c17b.jpg',1,'2023-07-20 21:39:57','2023-07-20 21:39:57'),(79,'image/jpeg','file-2023-07-21-64ba28ae22a5a.jpeg','jpeg','eafe62162729e970ccb88fd7a96fbaa3','75693','storage/files/file-2023-07-21-64ba28ae22a5a.jpeg',1,'2023-07-20 21:41:50','2023-07-20 21:41:50'),(80,'image/jpeg','file-2023-07-21-64ba2b2288223.jpg','jpg','b302aa842af775bcbe550253138ba9ba','262379','storage/files/file-2023-07-21-64ba2b2288223.jpg',1,'2023-07-20 21:52:18','2023-07-20 21:52:18'),(81,'image/jpeg','file-2023-07-21-64ba2b9d699f6.jpeg','jpeg','f99ede6c1116c3ef9bf68c48294a4f15','61098','storage/files/file-2023-07-21-64ba2b9d699f6.jpeg',1,'2023-07-20 21:54:21','2023-07-20 21:54:21'),(82,'image/jpeg','file-2023-07-21-64ba2bd361db6.jpg','jpg','f99ede6c1116c3ef9bf68c48294a4f15','61098','storage/files/file-2023-07-21-64ba2bd361db6.jpg',1,'2023-07-20 21:55:15','2023-07-20 21:55:15'),(83,'image/jpeg','file-2023-07-21-64ba2c1987593.jpg','jpg','302619930358815f6a0a3601df001309','79981','storage/files/file-2023-07-21-64ba2c1987593.jpg',1,'2023-07-20 21:56:25','2023-07-20 21:56:25'),(84,'image/jpeg','file-2023-07-21-64ba4c48273a4.jpeg','jpeg','eafe62162729e970ccb88fd7a96fbaa3','75693','storage/files/file-2023-07-21-64ba4c48273a4.jpeg',1,'2023-07-21 00:13:44','2023-07-21 00:13:44'),(85,'image/jpeg','file-2023-07-24-64be43d1d2045.jpg','jpg','302619930358815f6a0a3601df001309','79981','storage/files/file-2023-07-24-64be43d1d2045.jpg',1,'2023-07-24 00:26:41','2023-07-24 00:26:41'),(86,'image/png','file-2023-07-24-64be53b451ca0.png','png','6973a5a9acd9da6b0959a6ea4e2ce342','27794','storage/files/file-2023-07-24-64be53b451ca0.png',1,'2023-07-24 01:34:28','2023-07-24 01:34:28'),(87,'image/png','file-2023-07-24-64be53b457cf8.png','png','ad803f5e8063744a34fc09086f233323','38180','storage/files/file-2023-07-24-64be53b457cf8.png',1,'2023-07-24 01:34:28','2023-07-24 01:34:28'),(88,'image/png','file-2023-07-24-64be53b45cc90.png','png','5513f57d93c7fd4a03577ce5b9ca19a5','27215','storage/files/file-2023-07-24-64be53b45cc90.png',1,'2023-07-24 01:34:28','2023-07-24 01:34:28'),(89,'video/mp4','file-2023-07-24-64be942844329.mp4','mp4','7e15c3fd9cf6ed88c2b48fc5859f7aae','3454964','storage/files/file-2023-07-24-64be942844329.mp4',1,'2023-07-24 06:09:28','2023-07-24 06:09:28'),(90,'video/mp4','file-2023-07-27-64c25225a8ad1.mp4','mp4','75b978568dba6f136aa9dd057460ff68','2019619','storage/files/file-2023-07-27-64c25225a8ad1.mp4',1,'2023-07-27 02:16:53','2023-07-27 02:16:53'),(91,'video/mp4','file-2023-07-27-64c252d06d025.mp4','mp4','75b978568dba6f136aa9dd057460ff68','2019619','storage/files/file-2023-07-27-64c252d06d025.mp4',1,'2023-07-27 02:19:44','2023-07-27 02:19:44'),(92,'video/mp4','file-2023-07-27-64c2536ab33fe.mp4','mp4','7179db78a7dea2b17fc50d3f480536ae','1831019','storage/files/file-2023-07-27-64c2536ab33fe.mp4',1,'2023-07-27 02:22:18','2023-07-27 02:22:18'),(93,'video/mp4','file-2023-07-27-64c25498861a8.mp4','mp4','7fa9f99b308637c61a1fea3bbcd209ef','1599520','storage/files/file-2023-07-27-64c25498861a8.mp4',1,'2023-07-27 02:27:20','2023-07-27 02:27:20'),(94,'video/mp4','file-2023-07-27-64c25540bf43a.mp4','mp4','8434627c0bd6813e5e03f087acfbdbc0','2520869','storage/files/file-2023-07-27-64c25540bf43a.mp4',1,'2023-07-27 02:30:08','2023-07-27 02:30:08'),(95,'video/mp4','file-2023-07-27-64c2555e53a3c.mp4','mp4','7fa9f99b308637c61a1fea3bbcd209ef','1599520','storage/files/file-2023-07-27-64c2555e53a3c.mp4',1,'2023-07-27 02:30:38','2023-07-27 02:30:38'),(96,'video/mp4','file-2023-07-27-64c256574ab89.mp4','mp4','6d3451c82eef8339b4d07d85a79ac88c','2257609','storage/files/file-2023-07-27-64c256574ab89.mp4',1,'2023-07-27 02:34:47','2023-07-27 02:34:47'),(97,'video/mp4','file-2023-07-27-64c256e15f2d0.mp4','mp4','6d617d21de8ca39c2d774260e85f4d69','2281562','storage/files/file-2023-07-27-64c256e15f2d0.mp4',1,'2023-07-27 02:37:05','2023-07-27 02:37:05'),(98,'video/mp4','file-2023-07-27-64c2575e3ab02.mp4','mp4','7b3d4960b8fc59ec3a02652ff6caa356','2016499','storage/files/file-2023-07-27-64c2575e3ab02.mp4',1,'2023-07-27 02:39:10','2023-07-27 02:39:10'),(99,'video/mp4','file-2023-07-27-64c2581caf64f.mp4','mp4','e3cf04460bde2ebe60837a00f157d976','2735164','storage/files/file-2023-07-27-64c2581caf64f.mp4',1,'2023-07-27 02:42:20','2023-07-27 02:42:20'),(100,'video/mp4','file-2023-07-28-64c35a03811de.mp4','mp4','7fa9f99b308637c61a1fea3bbcd209ef','1599520','storage/files/file-2023-07-28-64c35a03811de.mp4',1,'2023-07-27 21:02:43','2023-07-27 21:02:43'),(101,'video/mp4','file-2023-07-28-64c35a2829a74.mp4','mp4','8434627c0bd6813e5e03f087acfbdbc0','2520869','storage/files/file-2023-07-28-64c35a2829a74.mp4',1,'2023-07-27 21:03:20','2023-07-27 21:03:20'),(102,'video/mp4','file-2023-07-28-64c35a3e09977.mp4','mp4','e3cf04460bde2ebe60837a00f157d976','2735164','storage/files/file-2023-07-28-64c35a3e09977.mp4',1,'2023-07-27 21:03:42','2023-07-27 21:03:42');
/*!40000 ALTER TABLE `file_upload` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galleries` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `album_id` int NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homepage`
--

DROP TABLE IF EXISTS `homepage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `homepage` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `bk_image` int NOT NULL DEFAULT '0',
  `news_ids` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 off 1 publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homepage`
--

LOCK TABLES `homepage` WRITE;
/*!40000 ALTER TABLE `homepage` DISABLE KEYS */;
INSERT INTO `homepage` VALUES (1,102,'10,11,12,13,14,15',1,NULL,'2023-07-27 21:03:42');
/*!40000 ALTER TABLE `homepage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'job type 1 新卒採用　2 キャリア採用',
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `requirement` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `work_place` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `work_time` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `rest_time` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `salary` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 off 1 publish',
  `show_rank` int NOT NULL DEFAULT '0' COMMENT '表示順',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job`
--

LOCK TABLES `job` WRITE;
/*!40000 ALTER TABLE `job` DISABLE KEYS */;
INSERT INTO `job` VALUES (1,1,'job2','aaaaaaaaaaaaa2','bbbbbbbbbbbbbb2','cccccccccccccccccc2','本社／完全週休2日制（土・日曜日）、\r\n指定休暇（年間14日） 営業所／完全週休2日制（火・水曜日）、指定休暇（年間14日） \r\n共通／年次有給休暇、保存年次有給休暇、結婚休暇、忌引休暇、病気休暇、産前産後休暇、看護介護 休暇　ほか','ffffffffffffffffffff2','gggggggggggggggg2',1,24,'2023-07-05 17:23:56','2023-07-14 00:34:23'),(2,2,'job3','aaaaaaaaaaaaa','bbbbbbbbbbbb','ccccccccccccccccc','ddddddddddddddddd','eeeeeeeeeeeeeeee','fffffffffffffffff',1,30,'2023-07-05 17:36:05','2023-07-05 17:36:05'),(3,1,'正社員','大卒総合職　215,000円','6ヶ月　※試雇期間中の労働条件の相違なし','時間外手当、休日出勤手当、営業手当、資格手当、扶養手当 など','年1回（7月）','年2回（6、12月）','本社／完全週休2日制（土・日曜日）、指定休暇（年間14日）\r\n\r\n営業所／完全週休2日制（火・水曜日）、指定休暇（年間14日）\r\n共通／年次有給休暇、保存年次有給休暇、結婚休暇、忌引休暇、病気休暇、産前産後休暇、看護介護\r\n休暇　ほか',1,23,'2023-07-05 18:11:39','2023-07-14 00:12:38'),(4,1,'sfasf','afasf','fasfass','fasfa','fasfasf','fasfa','fasfas',1,223,'2023-07-06 22:12:32','2023-07-09 22:40:31');
/*!40000 ALTER TABLE `job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `agent_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `property_id` int DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_05_07_134045_create_roles_table',1),(4,'2018_05_09_054206_create_tags_table',1),(5,'2018_05_09_135424_create_categories_table',1),(6,'2018_05_10_171517_create_posts_table',1),(7,'2018_05_10_172731_create_category_post_table',1),(8,'2018_05_10_172800_create_post_tag_table',1),(9,'2018_05_19_134221_create_features_table',1),(10,'2018_05_19_134753_create_feature_property_table',1),(11,'2018_07_18_042846_create_galleries_table',1),(12,'2018_08_12_081814_create_sliders_table',1),(13,'2018_08_12_113108_create_testimonials_table',1),(14,'2018_08_12_142529_create_albums_table',1),(15,'2018_08_15_194359_create_messages_table',1),(16,'2018_08_20_070748_create_settings_table',1),(17,'2018_08_25_110649_create_comments_table',1),(18,'2018_09_04_183409_create_ratings_table',1),(19,'2018_10_17_153558_create_services_table',1),(20,'2023_05_18_064311_create_properties_table',1),(21,'2023_05_26_064353_create_configs_table',1),(22,'2023_05_31_060606_create_property_image_galleries_table',1),(23,'2023_05_31_103015_create_test_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newgraduate`
--

DROP TABLE IF EXISTS `newgraduate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `newgraduate` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `start_salary` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `trial_period` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `hands_on` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `salary_incr` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `bonus` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `work_place` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `work_time` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `rest_time` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `welfare` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `training_system` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 off 1 publish',
  `show_rank` int NOT NULL DEFAULT '0' COMMENT '表示順',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newgraduate`
--

LOCK TABLES `newgraduate` WRITE;
/*!40000 ALTER TABLE `newgraduate` DISABLE KEYS */;
INSERT INTO `newgraduate` VALUES (2,'aaaaaaaaaaaaabbbbbbbeeeee','bbbbbbbbbbbbbbbbccccccccccc\r\nddddddddddddddddd','cccccccccccccgggggggggggggg','eeeeeeeeeeeeeeeeeeeeegggggggggggg','ggggggggggggaaaaaaaaaaaaaa','ddddddddddddddddbbbbbbbbbbbbbb','gggggggggggggggdddddddddddddddd','eeeeeeeeeeeefffffffff','ggggggggggggggggggggaaaaaaaaaaa','eeeeeeeeeeeeeeeeeeeeeeaaaaaaaaaaa','eeeeeeeeeeeeeeeqqqqqqqqqqqqqqq',1,1,'2023-07-20 17:25:03','2023-07-21 00:17:54'),(3,'bbbbbbbbbbbb','ccccccccccccccccc\r\ndddddddddddddddd','gggggggggggggggggg','eeeeeeeeeeeeee','aaaaaaaaaaaaaaaaaaa','aagggggggggggggg','gggggggggggggggg','eeeeeeeeeeeeeee','ggggggggggggg\r\nafasdfasdasdfasfd','aaaaaaaaaaaaaaa\r\nbbbbbbbbbbbbbbbb','aaaaaaaaaaaaaaaaa\r\nccccccccccccccccccccc',1,1,'2023-07-20 17:29:43','2023-07-20 17:29:43');
/*!40000 ALTER TABLE `newgraduate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_tag` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int unsigned NOT NULL,
  `tag_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tag`
--

LOCK TABLES `post_tag` WRITE;
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `properties` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nearby` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `structure` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_area` double(8,2) NOT NULL,
  `balconies_area` double(8,2) NOT NULL,
  `direction` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_layout` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `completion_time` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `household` int NOT NULL,
  `management_mode` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_rights` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipment` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_equipment` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pet` smallint NOT NULL,
  `communication_environment` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `common_equipment` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_management_price` int NOT NULL,
  `monthly_maintenance_price` int NOT NULL,
  `monthly_others_price` int NOT NULL,
  `purpose` enum('sale','rent') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fitment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'リフォーム',
  `moving_into` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '[rents]入居',
  `trade_style` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '[rents]取引態様',
  `condition` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '[rents]条件',
  `guarantee_company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '[rents]保証会社',
  `update_year_month_day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '[rents]更新年月日',
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '[rents]備考',
  `deposit` decimal(10,1) DEFAULT NULL COMMENT '敷金',
  `key_money` decimal(10,1) DEFAULT NULL COMMENT '礼金',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` VALUES (1,'ヴィラ・デステ',11580.00,'高田馬場','ＪＲ山手線「高田馬場」歩2分','3',113.09,10.10,'南東','4LDK','1981年',9,'なし','','なし','test',0,'','なし',22100,0,0,'sale',1,'2023-06-04 22:39:53','2023-06-09 00:20:02','test',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'ライオンズマンション',12.00,'大島1-2-1  2903','ＪＲ山手線「高田馬場」歩2分','3/6',34.00,0.00,'南東','4LDK','23',0,'','','','',0,'','',0,0,0,'rent',1,'2023-06-08 23:25:38','2023-06-11 21:15:46','test','test','test','test','test','test','test',NULL,NULL),(5,'ライオンズマンション町田',2341.00,'大島1-2-1  1101','大島まで5分ほど','5階',98.33,0.00,'南','3LDK','1999',453,'なし','','なし','なし',1,'','なし',0,0,0,'sale',1,'2023-06-12 21:46:33','2023-06-12 21:46:33','3','','','','','','',NULL,NULL),(6,'サンライズタワー',1100.00,'高田馬場3-2-2','ＪＲ山手線「高田馬場」歩2分','4/7',34.50,0.00,'南','2LDK','1983',34,'','','なし','',0,'','',0,0,0,'sale',1,'2023-06-12 22:17:16','2023-06-12 22:17:16','1','','','','','','',NULL,NULL),(7,'デュオステージ東十条',2130.00,'ＪＲ京浜東北線','ＪＲ東北線「高田」徒歩12分','3/23',567.20,12.00,'南','5LLDK','1981年',335,'','','','',0,'','',0,0,0,'sale',1,'2023-06-12 22:33:11','2023-06-12 22:33:11','1','','','','','','',NULL,NULL),(8,'高田馬場ONE',3450.00,'園でオン鴛海948-23','ＪＲ東北線「高田」徒歩12分','4/7',45.32,0.00,'南東','2LDK','1983',431,'','','なし','',0,'','',0,0,0,'sale',1,'2023-06-12 22:38:52','2023-06-12 22:38:52','1','','','','','','',NULL,NULL),(9,'相模原ONE',11.00,'相模原市南3-12-21','相模大浦','3/12',34.50,0.00,'南','3LDK','1983',234,'','','','',0,'','',0,0,0,'rent',1,'2023-06-13 23:24:10','2023-06-13 23:24:10','なし','2023年8月','仲介','日本人希望','海上日動','2023年6月18日','',NULL,NULL),(10,'川崎ABC',7.00,'川崎','東北線、川崎駅 徒歩10分','3/3',56.70,-1.00,'東','5LLDK','1998',0,'','','','',0,'','',0,0,0,'rent',1,'2023-06-13 23:27:45','2023-06-13 23:27:45','','','','','','','',NULL,NULL),(11,'豊洲FFD',25.00,'豊洲34-241-3','豊洲駅から徒歩8分','4/10',67.90,12.00,'南東','3LDK','1998',429,'','','','',0,'','',0,0,0,'rent',1,'2023-06-13 23:33:31','2023-06-13 23:33:31','','2023年10月','仲介','日本人希望','日本保険','','',NULL,NULL),(12,'新小岩OOO1',32.00,'新小岩','新小岩駅まで5分ほど','12',123.00,32.00,'南','4ldk','2023',234,'','','','',0,'','',0,0,0,'rent',1,'2023-06-13 23:52:52','2023-06-13 23:52:52','','2023年8月','仲介','日本人希望','','','',NULL,NULL),(16,'1',1.22,'1','1','1',1.00,0.00,'1','1','1',0,'','','','',0,'','',0,0,0,'rent',1,'2023-06-14 00:59:26','2023-06-14 01:00:35','','','','','','','',20.0,2.0),(17,'20230615_150006',1.00,'1','1','1',1.00,0.00,'1','1','1',0,'','','','',0,'','',0,0,0,'rent',1,'2023-06-14 21:00:24','2023-06-14 21:00:24','','','','','','','',1.0,0.9),(18,'20230615_1500301',1.00,'1','2','1',1.00,0.00,'1','1','1',0,'','','','',0,'','',0,0,0,'rent',1,'2023-06-14 21:00:48','2023-06-14 21:00:48','','','','','','','',1.0,1.0),(19,'20230615_1500301',1.00,'1','2','1',1.00,0.00,'1','1','1',0,'','','','',0,'','',0,0,0,'rent',1,'2023-06-14 21:00:48','2023-06-14 21:00:48','','','','','','','',1.0,1.0),(20,'20230615_1500301',1.00,'1','2','1',1.00,0.00,'1','1','1',0,'','','','',0,'','',0,0,0,'rent',1,'2023-06-14 21:00:48','2023-06-14 21:00:48','','','','','','','',1.0,1.0),(21,'20230615_1500301',1.00,'1','2','1',1.00,0.00,'1','1','1',0,'','','','',0,'','',0,0,0,'rent',1,'2023-06-14 21:00:48','2023-06-14 21:00:48','','','','','','','',1.0,1.0),(22,'20230615_1500301',1.00,'1','2','1',1.00,0.00,'1','1','1',0,'','','','',0,'','',0,0,0,'rent',1,'2023-06-14 21:00:48','2023-06-14 21:00:48','','','','','','','',1.0,1.0),(23,'20230615_1500301',1.00,'1','2','1',1.00,0.00,'1','1','1',0,'','','','',0,'','',0,0,0,'rent',1,'2023-06-14 21:00:48','2023-06-14 21:00:48','','','','','','','',1.0,1.0),(24,'20230615_1500301',1.00,'1','2','1',1.00,0.00,'1','1','1',0,'','','','',0,'','',0,0,0,'rent',1,'2023-06-14 21:00:48','2023-06-14 21:00:48','','','','','','','',1.0,1.0),(27,'test002',10.00,'test','test','test',232.00,232.00,'test','fasfa','saffa',2,'2fasfasf','','fasfas','afsfsaf',0,'','fasfas',2323,0,2319,'sale',1,'2023-07-20 20:20:33','2023-07-20 20:25:40','232332','','','','','','',0.0,0.0),(28,'aaaaaaa',32.00,'aaaaaaaaa','bbbbbbbbbbb','ddddddddddddd',232.00,23.00,'ffffffffffffff','ddddddddd','222222223',-1,'','','','',0,'','',0,0,0,'rent',1,'2023-07-20 20:25:20','2023-07-20 20:25:32','23233','223','232','2322','3232','32323','32323',232.0,232.0);
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_image_galleries`
--

DROP TABLE IF EXISTS `property_image_galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_image_galleries` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `property_id` int unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `size` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_image_galleries`
--

LOCK TABLES `property_image_galleries` WRITE;
/*!40000 ALTER TABLE `property_image_galleries` DISABLE KEYS */;
INSERT INTO `property_image_galleries` VALUES (1,1,'gallary-2023-06-05-647d9149d28b9.png','living room','1693059','2023-06-04 22:39:54','2023-06-04 22:39:54'),(10,4,'gallary-2023-06-09-6482e2025765d.png','マンションの構造1','362168','2023-06-08 23:25:38','2023-06-08 23:25:38'),(11,4,'gallary-2023-06-09-6482e20286f95.png','マンションの構造2','1075087','2023-06-08 23:25:39','2023-06-08 23:25:39'),(12,4,'gallary-2023-06-09-6482e203126a6.png','マンションの構造3','1030295','2023-06-08 23:25:39','2023-06-08 23:25:39'),(13,4,'gallary-2023-06-09-6482e2038bf7e.png','マンションの構造4','559037','2023-06-08 23:25:39','2023-06-08 23:25:39'),(14,5,'gallary-2023-06-13-648810c90853d.png','pic1','1030295','2023-06-12 21:46:33','2023-06-12 21:46:33'),(15,5,'gallary-2023-06-13-648810c9861ae.png','pic2','394137','2023-06-12 21:46:33','2023-06-12 21:46:33'),(16,5,'gallary-2023-06-13-648810c9c5b3c.png','pic3','97858','2023-06-12 21:46:33','2023-06-12 21:46:33'),(17,5,'gallary-2023-06-13-648810c9e3c49.png','pic4','1163171','2023-06-12 21:46:34','2023-06-12 21:46:34'),(18,6,'gallary-2023-06-13-648817fc197c4.png','pic1','859673','2023-06-12 22:17:16','2023-06-12 22:17:16'),(19,6,'gallary-2023-06-13-648817fc64322.png','pic2','755791','2023-06-12 22:17:16','2023-06-12 22:17:16'),(20,6,'gallary-2023-06-13-648817fca958a.png','pic3','899897','2023-06-12 22:17:17','2023-06-12 22:17:17'),(21,6,'gallary-2023-06-13-648817fd0aa91.png','pic4','1653454','2023-06-12 22:17:17','2023-06-12 22:17:17'),(22,7,'gallary-2023-06-13-64881bb73d5bf.png','picticusnging1','859673','2023-06-12 22:33:11','2023-06-12 22:33:11'),(23,7,'gallary-2023-06-13-64881bb787c1c.png','picticusnging2','755791','2023-06-12 22:33:11','2023-06-12 22:33:11'),(24,7,'gallary-2023-06-13-64881bb7cce7f.png','picticusnging3','899897','2023-06-12 22:33:12','2023-06-12 22:33:12'),(25,7,'gallary-2023-06-13-64881bb82ee7d.png','picticusnging4','1653454','2023-06-12 22:33:12','2023-06-12 22:33:12'),(26,8,'gallary-2023-06-13-64881d0cbc225.png','方式1','1653454','2023-06-12 22:38:53','2023-06-12 22:38:53'),(27,8,'gallary-2023-06-13-64881d0d5dea0.png','方式2','300804','2023-06-12 22:38:53','2023-06-12 22:38:53'),(28,8,'gallary-2023-06-13-64881d0d85808.png','方式3','755791','2023-06-12 22:38:53','2023-06-12 22:38:53'),(29,8,'gallary-2023-06-13-64881d0dca8b5.png','方式4','1075087','2023-06-12 22:38:54','2023-06-12 22:38:54'),(30,9,'gallary-2023-06-14-6489792a0a194.png','oneone1','1075087','2023-06-13 23:24:10','2023-06-13 23:24:10'),(31,9,'gallary-2023-06-14-6489792a896c4.png','oneone2','1030295','2023-06-13 23:24:11','2023-06-13 23:24:11'),(32,9,'gallary-2023-06-14-6489792b0dec0.png','oneone3','1653454','2023-06-13 23:24:11','2023-06-13 23:24:11'),(33,9,'gallary-2023-06-14-6489792b9deb7.png','oneone4','97858','2023-06-13 23:24:11','2023-06-13 23:24:11'),(34,10,'gallary-2023-06-14-64897a01e40eb.png','one','300804','2023-06-13 23:27:46','2023-06-13 23:27:46'),(35,10,'gallary-2023-06-14-64897a02198ce.png','two','1163171','2023-06-13 23:27:46','2023-06-13 23:27:46'),(36,10,'gallary-2023-06-14-64897a02ac321.png','three','859673','2023-06-13 23:27:46','2023-06-13 23:27:46'),(37,10,'gallary-2023-06-14-64897a0300251.png','four','362168','2023-06-13 23:27:47','2023-06-13 23:27:47'),(38,11,'gallary-2023-06-14-64897b5b1b86e.png','oneone','859673','2023-06-13 23:33:31','2023-06-13 23:33:31'),(39,11,'gallary-2023-06-14-64897b5b657a3.png','twotwo','899897','2023-06-13 23:33:31','2023-06-13 23:33:31'),(40,11,'gallary-2023-06-14-64897b5bbb2a6.png','threethree','1653454','2023-06-13 23:33:32','2023-06-13 23:33:32'),(41,11,'gallary-2023-06-14-64897b5c56cac.png','forurou','394137','2023-06-13 23:33:32','2023-06-13 23:33:32'),(42,12,'gallary-2023-06-14-64897fe459122.png','ONE','859673','2023-06-13 23:52:52','2023-06-13 23:52:52'),(43,12,'gallary-2023-06-14-64897fe4a300e.png','TWO','1163171','2023-06-13 23:52:53','2023-06-13 23:52:53'),(44,12,'gallary-2023-06-14-64897fe51f63a.png','THREE','559037','2023-06-13 23:52:53','2023-06-13 23:52:53'),(45,12,'gallary-2023-06-14-64897fe565050.png','ｆOUR','1653454','2023-06-13 23:52:53','2023-06-13 23:52:53'),(49,16,'gallary-2023-06-14-64898f7e59c08.png','1','14021','2023-06-14 00:59:26','2023-06-14 00:59:26'),(50,17,'gallary-2023-06-15-648aa8f8a428a.png','1','14021','2023-06-14 21:00:24','2023-06-14 21:00:24'),(51,18,'gallary-2023-06-15-648aa9109c306.png','1','14021','2023-06-14 21:00:48','2023-06-14 21:00:48'),(58,27,'gallary-2023-07-21-64ba15a1a7d4b.jpeg','aaaaaaaa','250538','2023-07-20 20:20:33','2023-07-20 20:20:33'),(59,27,'gallary-2023-07-21-64ba15a1b208c.jpeg','bbbbbbbbbbb','250538','2023-07-20 20:20:33','2023-07-20 20:20:33'),(60,27,'gallary-2023-07-21-64ba15a1ba445.jpeg','ccccccccccc','250538','2023-07-20 20:20:33','2023-07-20 20:20:33'),(61,27,'gallary-2023-07-21-64ba15a1c2159.jpeg','ddddddddd','250538','2023-07-20 20:20:33','2023-07-20 20:20:33'),(62,27,'gallary-2023-07-21-64ba15b47e38b.jpeg','','250538','2023-07-20 20:20:52','2023-07-20 20:20:52'),(63,28,'gallary-2023-07-21-64ba16c0cf9bf.jpeg','2323','250538','2023-07-20 20:25:20','2023-07-20 20:25:20'),(64,28,'gallary-2023-07-21-64ba16c0d7f6c.jpeg','23232','250538','2023-07-20 20:25:20','2023-07-20 20:25:20'),(65,28,'gallary-2023-07-21-64ba16c0e00b0.jpeg','2222222223','250538','2023-07-20 20:25:20','2023-07-20 20:25:20'),(66,28,'gallary-2023-07-21-64ba16ccd22a3.jpeg','','250538','2023-07-20 20:25:32','2023-07-20 20:25:32');
/*!40000 ALTER TABLE `property_image_galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ratings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `property_id` int NOT NULL,
  `rating` decimal(8,2) NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratings`
--

LOCK TABLES `ratings` WRITE;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
/*!40000 ALTER TABLE `ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','admin','2023-06-04 01:33:40',NULL),(2,'Agent','agent','2023-06-04 01:33:40',NULL),(3,'User','user','2023-06-04 01:33:40',NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_order` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sliders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tags` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `test` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `about` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin','admin@lyc.co.jp','default.png','Bio of admin','$2y$10$IBBlIEOPfA5tbixeAm4U/OdMXxUZFsLmkqjAR5xu6Tu5Tl04peySe','qJymEL82VmRHeIPOcD2lO6pS8YbIXuQAJ7rAmHE0Oy8752a9laQb4Muk05DP','2023-06-04 01:33:40',NULL),(2,2,'Agent','agent','agent@lyc.co.jp','default.png','','$2y$10$bV3SJiRHbPBH2g3VMqsjG.Z6SHgMD.eJJUT9B18w96pmbQYf0dHZe',NULL,'2023-06-04 01:33:40',NULL),(3,3,'User','user','user@lyc.co.jp','default.png',NULL,'$2y$10$ZhBjdhLUmrSb9zhNy1GrsuuxHrl79gc.SvlfzlDITeo5wjNp76Bv.','DcpTNR2phh7xmRM4NoNpUL8neFBu1iFNQQKOypNVI0VPJd9YZdxUwcwiiv75','2023-06-04 01:33:40',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-28 17:28:17
