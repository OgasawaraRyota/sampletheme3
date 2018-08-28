<?php get_header(); ?>
  <nav class="nav-global">
    <ul>
      <li>
        <a href="introduction.html">展覧会について</a>
      </li>
      <li>
        <a href="schedule.html">スケジュール</a>
      </li>
      <li>
        <a href="gallery.html">作品紹介</a>
      </li>
      <li>
        <a href="tickets.html">前売り券申し込み</a>
      </li>
    </ul>
  </nav>
  <nav id="pickup_field">
    <ul>
     <li class="now">
       <img src="images/pickup1.jpg" alt="「企画展覧会。日本X写真。開催期間2015年8月28日より東京、大阪、福岡、名古屋、仙台巡回" id="pickup1">
     </li>
     <li>
       <img src="images/pickup2.jpg" alt="全国から集まった写真、約200点展示" id="pickup2">
     </li>
     <li>
       <img src="images/pickup3.jpg" alt="壁に風景写真が3点掛けられている" id="pickup3">
     </li>
    </ul>
  </nav>
  <div class="contents">
        <main>
          <section>
            <h2>トピックス</h2>
            <ul>
              <li><time datetime="2015-09-20">2015年09月20日</time>総入場者数が1万人を突破いたしました。</li>
              <li><time datetime="2015-09-18">2015年09月18日</time>大阪会場で展覧会がスタートしました。
                たくさんの皆様のご来場をお待ちしております。</li>
              <li><time datetime="2015-09-13">2015年09月13日</time>9月下旬に大阪会場で写真家5名によるギャラリートークを開催いたします。
                詳しい日程は決まり次第お知らせいたします。</li>
              <li><time datetime="2015-09-10">2015年09月10日</time>東京会場は終了いたしました。
              たくさんの皆様のご来場ありがとうございました。</li>
            </ul>
          </section>
        </main>
      <div class="sub">
        <aside>
          <div class="btn_field">
            <a href="gallery.html">
              <p><img src="images/btn_gallery.jpg" alt="作品紹介" width="200" height="114" alt="作品紹介"></p>
            </a>
          </div>
          <div class="btn_field">
            <dl>
              <a href="tickets.html">
                <dt><img src="images/btn_tickets.jpg" alt="前売り券申し込み" width="200" height="84" alt="前売り券申し込み"><dt>
                <dd>前売り券好評発売中</dd>
              </a>
            </dl>
          </div>
        </aside>
      </div>
    </div>

<?php
 get_sidebar();
 get_footer();
