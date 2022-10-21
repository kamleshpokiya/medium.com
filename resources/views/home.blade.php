@extends('partials.master')
@section('content')
    <div class="am cy">

        <div class="y gv gw gx">
            <div class="am an">
                <div class="ao ap aq ar as at au ae">
                    <div class="jl jm am cy jn jo jp e d">
                        <div class="ig y">
                            <p class="bv ii ij ik il by im">Discover more of what matters to you</p>
                        </div>
                        <div class="y">
                            <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                href="tag/programming1eda.html?source=home-------------------------------------">
                                <div class="jq jr js hh gn cp">
                                    <div>
                                        <p class="bv b hw bx hj">Programming</p>
                                    </div>
                                </div>
                            </a>
                            <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                href="tag/data-science1eda.html?source=home-------------------------------------">
                                <div class="jq jr js hh gn cp">
                                    <div>
                                        <p class="bv b hw bx hj">Data Science</p>
                                    </div>
                                </div>
                            </a>
                            <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                href="tag/technology1eda.html?source=home-------------------------------------">
                                <div class="jq jr js hh gn cp">
                                    <div>
                                        <p class="bv b hw bx hj">Technology</p>
                                    </div>
                                </div>
                            </a>
                            <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                href="tag/self-improvement1eda.html?source=home-------------------------------------">
                                <div class="jq jr js hh gn cp">
                                    <div>
                                        <p class="bv b hw bx hj">Self Improvement</p>
                                    </div>
                                </div>
                            </a>
                            <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                href="tag/writing1eda.html?source=home-------------------------------------">
                                <div class="jq jr js hh gn cp">
                                    <div>
                                        <p class="bv b hw bx hj">Writing</p>
                                    </div>
                                </div>
                            </a>
                            <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                href="tag/relationships1eda.html?source=home-------------------------------------">
                                <div class="jq jr js hh gn cp">
                                    <div>
                                        <p class="bv b hw bx hj">Relationships</p>
                                    </div>
                                </div>
                            </a>
                            <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                href="tag/machine-learning1eda.html?source=home-------------------------------------">
                                <div class="jq jr js hh gn cp">
                                    <div>
                                        <p class="bv b hw bx hj">Machine Learning</p>
                                    </div>
                                </div>
                            </a>
                            <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                href="tag/productivity1eda.html?source=home-------------------------------------">
                                <div class="jq jr js hh gn cp">
                                    <div>
                                        <p class="bv b hw bx hj">Productivity</p>
                                    </div>
                                </div>
                            </a>
                            <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                href="tag/politics1eda.html?source=home-------------------------------------">
                                <div class="jq jr js hh gn cp">
                                    <div>
                                        <p class="bv b hw bx hj">Politics</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ef y gy gz ha">
            <div class="am an">
                <div class="ao ap aq ar as at au ae">
                    <div class="l m n o p q">
                        <section class="pw-homefeed r s t u">
                            <div class="y">
                                <div>
                                    <div class="jt ju y">
                                        <?php
                                        
                                        use App\Models\Article_images;
                                        ?>
                                        @foreach ($articles as $article)
                                            <div class="ae cx">
                                                <div class="pw-homefeed-item jv jw jx jy jz ka kb">
                                                    <div class="co am bq kd ke kf kg kh ki">
                                                        <div class="ek ae au y">
                                                            <div class="kj y">
                                                                <div class="am bq ax">
                                                                    <a rel="noopener follow"
                                                                        href="%40EmilyJaneWillingham1647.html?source=home---------0------------------0----------">
                                                                        <div class="y cu">
                                                                            <img alt="Emily Willingham"
                                                                                class="y co jj go gp en"
                                                                                src="https://miro.medium.com/fit/c/40/40/0*3Eo3pID1c6Db91rw"
                                                                                width="20" height="20"
                                                                                loading="lazy" />
                                                                            <div class="ji jj y go gp jk ah"></div>
                                                                        </div>
                                                                    </a>
                                                                    <div class="iq am bq er">
                                                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm"
                                                                            rel="noopener follow"
                                                                            href="%40EmilyJaneWillingham1647.html?source=home---------0------------------0----------">
                                                                            <h4
                                                                                class="bv fh hw ik ct ir is it iu iv iw ix by iy">
                                                                                Emily Willingham</h4>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm"
                                                                rel="noopener follow"
                                                                href="%40EmilyJaneWillingham/generation-exposed-2bc1a31919541647.html?source=home---------0------------------0----------">
                                                                <h2
                                                                    class="bv ii kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la lb lc ld ct is it jb iv ix by">
                                                                    {{ $article->name }}</h2>
                                                                <div class="le y g">
                                                                    <h3 class="bv b ec bx ct ja is it jb iv ix hj">
                                                                        {!! substr(strip_tags($article->description), 0, 100) . '...' !!}
                                                                    </h3>
                                                                </div>
                                                            </a>
                                                            <div class="lf lg lh li lj am lk kd">
                                                                <div class="au am bq">
                                                                    <div class="vk y tags">
                                                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm"
                                                                            rel="noopener follow"
                                                                            href="/tag/laravel?source=explore----------59----------laravel----------e85f3396_9e42_4ccf_9875_74477bfbf631-------15">
                                                                            <div class="vl cu en lo ri rj bv b hw bx by rk">
                                                                                @foreach ($tags as $item)
                                                                                    {{ in_array($item->id, explode(',', $article->tag_id)) ? $item->name : '' }}
                                                                                @endforeach
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <span class="pw-published-date kc">
                                                                        <span class="bv b hw bx hj">
                                                                            <span>Oct 19</span>
                                                                        </span>
                                                                    </span>
                                                                    <div class="jc jd cx y cu ll" aria-hidden="true">
                                                                        <span class="y" aria-hidden="true">
                                                                            <span class="bv b bw bx hj">·</span>
                                                                        </span>
                                                                    </div>
                                                                    <span class="kc">
                                                                        <span class="pw-reading-time bv b hw bx hj">8
                                                                            min read</span>
                                                                    </span>
                                                                    
                                                                </div>
                                                                <div class="am">
                                                                    <div class="am bq">
                                                                        <div class="gn y lm"></div>
                                                                        <div class="y bp"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $img = Article_images::where(['id' => $article->id])->pluck('name')[0];
                                                        ?>
                                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm"
                                                            rel="noopener follow"
                                                            href="%40EmilyJaneWillingham/generation-exposed-2bc1a31919541647.html?source=home---------0------------------0----------">
                                                            <img alt="Generation Exposed" class=""
                                                                src="{{ url('/uploads/' . $img) }}" width="100"
                                                                height="100" loading="lazy" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                        </section>
                        <aside class="f v s w u">
                            <div class="y he hf">
                                <div class="jl ln am cy h g f lo lp">
                                    <div class="ig y">
                                        <p class="bv ii ij ik il by im">Discover more of what matters to you</p>
                                    </div>
                                    <div class="y">
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                            href="tag/programming1eda.html?source=home-------------------------------------">
                                            <div class="jq jr js hh gn cp">
                                                <div>
                                                    <p class="bv b hw bx hj">Programming</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                            href="tag/data-science1eda.html?source=home-------------------------------------">
                                            <div class="jq jr js hh gn cp">
                                                <div>
                                                    <p class="bv b hw bx hj">Data Science</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                            href="tag/technology1eda.html?source=home-------------------------------------">
                                            <div class="jq jr js hh gn cp">
                                                <div>
                                                    <p class="bv b hw bx hj">Technology</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                            href="tag/self-improvement1eda.html?source=home-------------------------------------">
                                            <div class="jq jr js hh gn cp">
                                                <div>
                                                    <p class="bv b hw bx hj">Self Improvement</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                            href="tag/writing1eda.html?source=home-------------------------------------">
                                            <div class="jq jr js hh gn cp">
                                                <div>
                                                    <p class="bv b hw bx hj">Writing</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                            href="tag/relationships1eda.html?source=home-------------------------------------">
                                            <div class="jq jr js hh gn cp">
                                                <div>
                                                    <p class="bv b hw bx hj">Relationships</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                            href="tag/machine-learning1eda.html?source=home-------------------------------------">
                                            <div class="jq jr js hh gn cp">
                                                <div>
                                                    <p class="bv b hw bx hj">Machine Learning</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                            href="tag/productivity1eda.html?source=home-------------------------------------">
                                            <div class="jq jr js hh gn cp">
                                                <div>
                                                    <p class="bv b hw bx hj">Productivity</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                            href="tag/politics1eda.html?source=home-------------------------------------">
                                            <div class="jq jr js hh gn cp">
                                                <div>
                                                    <p class="bv b hw bx hj">Politics</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="hg am ax er">
                                    <div class="hh hi y">
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm"
                                            href="https://help.medium.com/hc/en-us?source=home-------------------------------------"
                                            rel="noopener follow">
                                            <p class="bv b bw bx hj">Help</p>
                                        </a>
                                    </div>
                                    <div class="hh hi y">
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm"
                                            href="https://medium.statuspage.io/?source=home-------------------------------------"
                                            rel="noopener follow">
                                            <p class="bv b bw bx hj">Status</p>
                                        </a>
                                    </div>
                                    <div class="hh hi y">
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm"
                                            href="https://about.medium.com/creators/?source=home-------------------------------------"
                                            rel="noopener follow">
                                            <p class="bv b bw bx hj">Writers</p>
                                        </a>
                                    </div>
                                    <div class="hh hi y">
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm"
                                            href="https://blog.medium.com/?source=home-------------------------------------"
                                            rel="noopener follow">
                                            <p class="bv b bw bx hj">Blog</p>
                                        </a>
                                    </div>
                                    <div class="hh hi y">
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm" rel="noopener follow"
                                            href="jobs-at-medium/work-at-medium-959d1a85284e1eda.html?source=home-------------------------------------">
                                            <p class="bv b bw bx hj">Careers</p>
                                        </a>
                                    </div>
                                    <div class="hh hi y">
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm"
                                            href="https://policy.medium.com/medium-privacy-policy-f03bf92035c9?source=home-------------------------------------"
                                            rel="noopener follow">
                                            <p class="bv b bw bx hj">Privacy</p>
                                        </a>
                                    </div>
                                    <div class="hh hi y">
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm"
                                            href="https://policy.medium.com/medium-terms-of-service-9db0094a1e0f?source=home-------------------------------------"
                                            rel="noopener follow">
                                            <p class="bv b bw bx hj">Terms</p>
                                        </a>
                                    </div>
                                    <div class="hh hi y">
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm"
                                            href="about29f4.html?autoplay=1&amp;source=home-------------------------------------"
                                            rel="noopener follow">
                                            <p class="bv b bw bx hj">About</p>
                                        </a>
                                    </div>
                                    <div class="hh hi y">
                                        <a class="ay az ba bb bc bd be bf bg bh bi bj bk bl bm"
                                            href="https://knowable.fyi/?source=home-------------------------------------"
                                            rel="noopener follow">
                                            <p class="bv b bw bx hj">Knowable</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="i d">
                <div class="hk hl hm y hn aj ho ai hp hq">
                    <div class="am an">
                        <div class="ao ap aq ar as at au ae">
                            <a class="ay az ba bb bc bd be bf bg bh hr hs bk ht hu" aria-label="Go to homepage"
                                rel="noopener follow"
                                href="index1eda.html?source=home-------------------------------------">
                                <svg viewBox="0 0 3940 610" class="cc el">
                                    <path
                                        d="M594.79 308.2c0 163.76-131.85 296.52-294.5 296.52S5.8 472 5.8 308.2 137.65 11.69 300.29 11.69s294.5 132.75 294.5 296.51M917.86 308.2c0 154.16-65.93 279.12-147.25 279.12s-147.25-125-147.25-279.12S689.29 29.08 770.61 29.08s147.25 125 147.25 279.12M1050 308.2c0 138.12-23.19 250.08-51.79 250.08s-51.79-112-51.79-250.08 23.19-250.08 51.8-250.08S1050 170.09 1050 308.2M1862.77 37.4l.82-.18v-6.35h-167.48l-155.51 365.5-155.51-365.5h-180.48v6.35l.81.18c30.57 6.9 46.09 17.19 46.09 54.3v434.45c0 37.11-15.58 47.4-46.15 54.3l-.81.18V587H1327v-6.35l-.81-.18c-30.57-6.9-46.09-17.19-46.09-54.3V116.9L1479.87 587h11.33l205.59-483.21V536.9c-2.62 29.31-18 38.36-45.68 44.61l-.82.19v6.3h213.3v-6.3l-.82-.19c-27.71-6.25-43.46-15.3-46.08-44.61l-.14-445.2h.14c0-37.11 15.52-47.4 46.08-54.3m97.43 287.8c3.49-78.06 31.52-134.4 78.56-135.37 14.51.24 26.68 5 36.14 14.16 20.1 19.51 29.55 60.28 28.09 121.21zm-2.11 22h250v-1.05c-.71-59.69-18-106.12-51.34-138-28.82-27.55-71.49-42.71-116.31-42.71h-1c-23.26 0-51.79 5.64-72.09 15.86-23.11 10.7-43.49 26.7-60.45 47.7-27.3 33.83-43.84 79.55-47.86 130.93-.13 1.54-.24 3.08-.35 4.62s-.18 2.92-.25 4.39a332.64 332.64 0 0 0-.36 21.69C1860.79 507 1923.65 600 2035.3 600c98 0 155.07-71.64 169.3-167.8l-7.19-2.53c-25 51.68-69.9 83-121 79.18-69.76-5.22-123.2-75.95-118.35-161.63m532.69 157.68c-8.2 19.45-25.31 30.15-48.24 30.15s-43.89-15.74-58.78-44.34c-16-30.7-24.42-74.1-24.42-125.51 0-107 33.28-176.21 84.79-176.21 21.57 0 38.55 10.7 46.65 29.37zm165.84 76.28c-30.57-7.23-46.09-18-46.09-57V5.28L2424.77 60v6.7l1.14-.09c25.62-2.07 43 1.47 53.09 10.79 7.9 7.3 11.75 18.5 11.75 34.26v71.14c-18.31-11.69-40.09-17.38-66.52-17.38-53.6 0-102.59 22.57-137.92 63.56-36.83 42.72-56.3 101.1-56.3 168.81C2230 518.72 2289.53 600 2378.13 600c51.83 0 93.53-28.4 112.62-76.3V588h166.65v-6.66zm159.29-505.33c0-37.76-28.47-66.24-66.24-66.24-37.59 0-67 29.1-67 66.24s29.44 66.24 67 66.24c37.77 0 66.24-28.48 66.24-66.24m43.84 505.33c-30.57-7.23-46.09-18-46.09-57h-.13V166.65l-166.66 47.85v6.5l1 .09c36.06 3.21 45.93 15.63 45.93 57.77V588h166.8v-6.66zm427.05 0c-30.57-7.23-46.09-18-46.09-57V166.65L3082 212.92v6.52l.94.1c29.48 3.1 38 16.23 38 58.56v226c-9.83 19.45-28.27 31-50.61 31.78-36.23 0-56.18-24.47-56.18-68.9V166.66l-166.66 47.85V221l1 .09c36.06 3.2 45.94 15.62 45.94 57.77v191.27a214.48 214.48 0 0 0 3.47 39.82l3 13.05c14.11 50.56 51.08 77 109 77 49.06 0 92.06-30.37 111-77.89v66h166.66v-6.66zM3934.2 588v-6.67l-.81-.19c-33.17-7.65-46.09-22.07-46.09-51.43v-243.2c0-75.83-42.59-121.09-113.93-121.09-52 0-95.85 30.05-112.73 76.86-13.41-49.6-52-76.86-109.06-76.86-50.12 0-89.4 26.45-106.25 71.13v-69.87l-166.66 45.89v6.54l1 .09c35.63 3.16 45.93 15.94 45.93 57V588h155.5v-6.66l-.82-.2c-26.46-6.22-35-17.56-35-46.66V255.72c7-16.35 21.11-35.72 49-35.72 34.64 0 52.2 24 52.2 71.28V588h155.54v-6.66l-.82-.2c-26.46-6.22-35-17.56-35-46.66v-248a160.45 160.45 0 0 0-2.2-27.68c7.42-17.77 22.34-38.8 51.37-38.8 35.13 0 52.2 23.31 52.2 71.28V588z">
                                    </path>
                                </svg>
                            </a>
                            <div class="hv y">
                                <p class="bv b hw bx hx">
                                    <a class="ay az ba bb bc bd be bf bg bh hy bk ht hu ek"
                                        href="about29f4.html?autoplay=1&amp;source=home-------------------------------------"
                                        rel="noopener follow">About</a>
                                    <a class="ay az ba bb bc bd be bf bg bh hy bk ht hu ek"
                                        href="https://help.medium.com/hc/en-us?source=home-------------------------------------"
                                        rel="noopener follow">Help</a>
                                    <a class="ay az ba bb bc bd be bf bg bh hy bk ht hu ek"
                                        href="https://policy.medium.com/medium-terms-of-service-9db0094a1e0f?source=home-------------------------------------"
                                        rel="noopener follow">Terms</a>
                                    <a class="ay az ba bb bc bd be bf bg bh hy bk ht hu"
                                        href="https://policy.medium.com/medium-privacy-policy-f03bf92035c9?source=home-------------------------------------"
                                        rel="noopener follow">Privacy</a>
                                </p>
                            </div>
                            <div class="j i d">
                                <hr class="hz ia ib ic" aria-hidden="true" />
                                <h2 class="bv fh ec bx fk hx">Get the Medium app</h2>
                                <div class="hv am">
                                    <div class="gi y">
                                        <a class="ay az ba bb bc bd be bf bg bh hr hs bk ht hu"
                                            href="https://itunes.apple.com/app/medium-everyones-stories/id828256236?pt=698524&amp;mt=8&amp;ct=home&amp;source=home-------------------------------------"
                                            rel="noopener follow">
                                            <img alt="A button that says &#x27;Download on the App Store&#x27;, and if clicked it will lead you to the iOS App store"
                                                class=""
                                                src="../miro.medium.com/max/270/1_Crl55Tm6yDNMoucPo1tvDg.png"
                                                width="135" height="41" loading="lazy" />
                                        </a>
                                    </div>
                                    <a class="ay az ba bb bc bd be bf bg bh hr hs bk ht hu"
                                        href="https://play.google.com/store/apps/details?id=com.medium.reader&amp;source=home-------------------------------------"
                                        rel="noopener follow">
                                        <img alt="A button that says &#x27;Get it on, Google Play&#x27;, and if clicked it will lead you to the Google Play store"
                                            class="" src="../miro.medium.com/max/270/1_W_RAPQ62h0em559zluJLdQ.png"
                                            width="135" height="41" loading="lazy" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
