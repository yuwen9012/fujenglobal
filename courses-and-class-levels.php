<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link href="images/logo.ico" rel="shortcut icon" />

    <!-- 引入 Poppins 字體 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <!-- 引入 Merriweather 字體 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/courses-and-class-levels.css">
    <link rel="stylesheet" href="css/fixed.css">

    <!-- JS -->

    <title>Fu Jen Global</title>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
        <div class="container-fluid d-flex align-items-center">
            <a href="home.php"> 
                <img src="images/06-校徽-英文組合排列.png" id="logo">
            </a>
            <div class="flex-grow-1 text-center">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="javascript:history.back()"><i class="fas fa-arrow-left"></i></a>
                    <span class="navbar-text mx-2">Courses and class levels</span>
                </div>
            </div>
        </div>
    </nav>
  <!-- General Courses 區塊 -->
  <section class="container my-5">
    <h3 class="my-3 fw-bolder">General Courses</h3>
    <p class="text-center">4-7 students in class, the CCLC office reserves the right to change the number of students per class.</p>
    
    <!-- Class Type 表格 -->
        <div class="table-responsive d-flex justify-content-center align-items-center">
            <table class="table" id="table1">
                <thead>
                    <tr class="text-center">
                        <th colspan="3" class="table-h2">Class Type</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td class="table1-bg">4-7 students in class<br>10 hours per week</td>
                        <td class="table1-bg table1-line">2-3 students in class<br>15 hours per week</td>
                        <td class="table1-bg table1-line">Individual class<br>15 hours per week</td>
                    </tr>
                </tbody>
            </table>
        </div>

    <p class="text-center" style="color:  #A73929;">*The students will have 15 hours per week. Individual classes are costomized.</p>
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
          <tr class="text-center">
            <th class="table-h" colspan="2">Level</th>
            <th class="table-h">Mainly used Materials</th>
            <th class="table-h">Added Materials / References</th>
            <th class="table-h">Term</th>
            <th class="table-h">Compulsory Courses</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td class="green C-first"></td>
            <td>Elementary 1</td>
            <td>Modern Chinese 1 (L1-L10)</td>
            <td>Far East Everyday Chinese Book I / Speak Mandarin in Five Hundred Words</td>
            <td>One quarter (3 months)</td>
            <td>Huayu Enyin (Combined with General Courses)</td>
          </tr>
          <tr>
            <td class="green C-first"></td>
            <td>Elementary 2</td>
            <td>Modern Chinese 1 (L11-L20) / Modern Chinese 2 (L1-L4)</td>
            <td>Far East Everyday Chinese Book IIA / Speak Mandarin in One Thousand Words</td>
            <td>One quarter (3 months)</td>
            <td>Basic Conversation / TOCFL Listening and Reading Practice (Band A)</td>
          </tr>
          <tr>
            <td class="green C-first"></td>
            <td>Elementary 3</td>
            <td>Modern Chinese 2 (L5-L10)</td>
            <td>Far East Everyday Chinese Book IIB</td>
            <td>One quarter (3 months)</td>
            <td>Basic Conversation / TOCFL Listening and Reading Practice (Band A)</td>
          </tr>
          <tr>
            <td class="orange C-first"></td>
            <td>Intermediate 1</td>
            <td>Modern Chinese 3 (L1-L10)</td>
            <td>Taiwan Today (L1-L7)</td>
            <td>One quarter (3 months)</td>
            <td rowspan="3">Modern Chinese Lexicography / Song Learning in Chinese / Fun Stories / Business Chinese / TOCFL Listening and Reading Practice (Band B)</td>
          </tr>
          <tr>
            <td class="orange C-first"></td>
            <td>Intermediate 2</td>
            <td>Modern Chinese 3 (L11-L14)</td>
            <td>Taiwan Today (L8-L14)</td>
            <td>One quarter (3 months)</td>
         </tr>
          <tr>
            <td class="orange C-first"></td>
            <td>Intermediate 3</td>
            <td>Modern Chinese 4 (L1-L6)</td>
            <td>Far East Everyday Chinese Book III</td>
            <td>One quarter (3 months)</td>
         </tr>
          <tr>
            <td class="red C-first"></td>
            <td>Advanced 1-1 / Advanced 1-2</td>
            <td>The Roads Taken: Readings in Chinese Newspaper I / Textbook Advanced 1-1(L1-L8) Advanced 1-2 (L1-L15)</td>
            <td>Daily News Papers</td>
            <td>One quarter (3 months)</td>
            <td rowspan="3">Introduction of Taiwan History and Culture / Chinese Writing / Movie Appreciation / Business Chinese / Ted Talks</td>
          </tr>
          <tr>
            <td class="red C-first"></td>
            <td>Advanced 2</td>
            <td>Selected News by News Topics</td>
            <td>News Papers / News on the Internet</td>
            <td>One quarter (3 months)</td>
            </tr>
          <tr>
            <td class="red C-first"></td>
            <td>Advanced 3</td>
            <td>Selected Modern Chinese Essays</td>
            <td>Selected Contemporary/Advanced Short Stories / Thought and Society Articles from Newspapers and Magazines</td>
            <td>One quarter (3 months)</td>
            </tr>
        </tbody>
      </table>
    </div>  
  </section>

  <!-- Class Levels 區塊 -->
  <section class="container my-5">
    <h3 class="my-3 fw-bolder">Class levels</h3>
    <!-- 表格1  -->
    
    <div class="container mt-4">
        <table class="table table-bordered table-striped">
            <thead>
                <tr  class="text-center">
                    <th class="table-h2" colspan="2">Level</th>
                    <th class="table-h2">CEFR</th>
                    <th class="table-h2">ACTFL</th>
                    <th class="table-h2">HSK</th>
                    <th class="table-h2">TOCFL</th>
                </tr>
            </thead>
            <tbody  class="text-center">
                <tr>
                    <td class="green C-first"></td>
                    <td>Elementary Mandarin I</td>
                    <td>A1</td>
                    <td>Novice-low</td>
                    <td>3</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="green C-first"></td>
                    <td>Elementary Mandarin II</td>
                    <td>A2</td>
                    <td>Novice-mid</td>
                    <td>4</td>
                    <td>A1</td>
                </tr>
                <tr>
                    <td class="green C-first"></td>
                    <td>Elementary Mandarin III</td>
                    <td>A2</td>
                    <td>Novice-high</td>
                    <td>5</td>
                    <td>A2</td>
                </tr>
                <tr>
                    <td class="orange C-first"></td>
                    <td>Intermediate Mandarin I</td>
                    <td>B1</td>
                    <td>Intermediate-low</td>
                    <td>6</td>
                    <td>B1</td>
                </tr>
                <tr>
                    <td class="orange C-first"></td>
                    <td>Intermediate Mandarin II</td>
                    <td>B2</td>
                    <td>Novice-mid</td>
                    <td></td>
                    <td>B2</td>
                </tr>
                <tr>
                    <td class="orange C-first"></td>
                    <td>Intermediate Mandarin III</td>
                    <td>B2</td>
                    <td>Intermediate-mid</td>
                    <td></td>
                    <td>B2</td>
                </tr>
                <tr>
                    <td class="red C-first"></td>
                    <td>Advanced I</td>
                    <td>C1-</td>
                    <td>Intermediate-mid</td>
                    <td></td>
                    <td>C1</td>
                </tr>
                <tr>
                    <td class="red C-first"></td>
                    <td>Advanced II</td>
                    <td>C1</td>
                    <td>Intermediate - high</td>
                    <td></td>
                    <td>C1</td>
                </tr>
                <tr>
                    <td class="red C-first"></td>
                    <td>Advanced III</td>
                    <td>C1+</td>
                    <td>Advanced - Plus</td>
                    <td></td>
                    <td>C1+</td>
                </tr>
                <tr>
                    <td class="red C-first"></td>
                    <td>Advanced IV</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- 表格2  -->
    <div class="container-fluid">
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th class="table-h2" colspan="2">Level</th>
                    <th class="table-h2">Reading and Writing</th>
                    <th class="table-h2">Listening and Speaking</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="green C-first"></td>
                    <td class="text-center">Elementary Mandarin I</td>
                    <td>
                        <ol>
                            <li>Can understand about 450 vocabulary words.</li>
                            <li>Can write Chinese characters.</li>
                            <li>Can note down and create simple dialogue.</li>
                            <li>Can write main ideas in simple dialogue and read.</li>
                        </ol>
                    </td>
                    <td>
                        <ol>
                            <li>Can use Zhuyin Fuhao (Bopomofo) or Hanyu Pinyin Romanization phonetic system.</li>
                            <li>Can have very basic conversation with simple words.</li>
                            <li>Can understand expressions conducted slowly and often requires repetition or rephrasing.</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td class="green C-first"></td>
                    <td  class="text-center">Elementary Mandarin II</td>
                    <td>
                        <ol>
                            <li>Can understand about 480 vocabulary words</li>
                            <li>Can note down simple information heard.</li>
                            <li>Can create dialogue about daily routines.</li>
                            <li>Can write main ideas in everyday conversation and read.</li>
                        </ol>
                    </td>
                    <td>
                        <ol>
                            <li>Can have basic conversation with daily expression phrases and describe subjects related to personal details, family and studying in short sentences.</li>
                            <li>Can understand simple expressions conducted slowly and clearly.</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td class="green C-first"></td>
                    <td  class="text-center">Elementary Mandarin III</td>
                    <td>
                        <ol>
                            <li>Can understand about 1200 vocabulary words</li>
                            <li>Can write concrete topics and read.</li>
                            <li>Can create dialogue about specific topics.</li>
                            <li>Can write main ideas in dialogue about specific topics and read.</li>
                        </ol>
                    </td>
                    <td>
                        <ol>
                            <li>Can understand commonly used words in various topics.</li>
                            <li>Can describe concrete topics in a simple way and give fragmented personal views towards things around oneself.</li>
                            <li>Can understand conversation delivered in a standard dialect on familiar matters.</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td class="orange C-first"></td>
                    <td class="text-center">Intermediate Mandarin I</td>
                    <td>
                        <ol>
                            <li>Can understand about 1200 vocabulary words</li>
                            <li>Can comprehend commonly used words in daily routines and social life(work, school and leisure venues) and uncompleted narratives.</li>
                            <li>Can briefly describe and explain personal subjects such as experience, interests and dreams.</li>
                            <li>Can write a paragraph about above subjects in 300 words or more but often with incomplete sentences and incorrect words.</li>
                        </ol>
                    </td>
                    <td>
                        <ol>
                            <li>Can mostly understand information or instructions of daily life or specific topics such as family, hobby, interpersonal interaction, work and exhibition guide tour.</li>
                            <li>Can clearly express emotions.</li>
                            <li>Can give and explain personal opinions but have difficulty expressing standpoints in social interaction and often have confusions about classic and vernacular Chinese when speaking.</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td class="orange C-first"></td>
                    <td class="text-center">Intermediate Mandarin II</td>
                    <td>
                        <ol>
                            <li>Can understand about 700 vocabulary words</li>
                            <li>Can read and comprehend multiple sentences but have difficulty understanding uncommon idioms in written Chinese.</li>
                            <li>Can read different types of texts of extended topics and understand cultural implication with reference works.</li>
                            <li>Can read essays in professional fields more fluently and write a summary or brief report.</li>
                            <li>Can write a paragraph about one's specialty and experience in 500 words or more but sometimes with incomplete sentences and incorrect words.</li>
                        </ol>
                    </td>
                    <td>
                        <ol>
                            <li>Can understand speeches in professional fields.</li>
                            <li>Can understand messages by synthesizing different speakers' points of view and standpoints.</li>
                            <li>Can develop clear pro/con arguments and provide brief reasons to support one's opinions on different issues.</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td class="orange C-first"></td>
                    <td class="text-center">Intermediate Mandarin III</td>
                    <td>
                        <ol>
                            <li>Can understand about 500 vocabulary words.</li>
                            <li>Can read texts on concrete and abstract topics and understand specialized knowledge and technical discussions conveyed with a large extent of autonomy and different reading strategies and speed.</li>
                            <li>Can clearly present pro/con arguments, analyzing the advantages and drawbacks on issues and provide reasons.</li>
                            <li>Can write a paragraph or report about complex topics in different genres in about 600 words but occasionally with incomplete sentences and incorrect words.</li>
                        </ol>
                    </td>
                    <td>
                        <ol>
                            <li>Can understand speeches in professional fields.</li>
                            <li>Can understand messages by synthesizing different speakers' points of view and standpoints.</li>
                            <li>Can develop clear pro/con arguments and provide brief reasons to support one's opinions on different issues.</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td class="red C-first"></td>
                    <td  class="text-center">Advanced I</td>
                    <td>
                        <ol>
                            <li>Can understand about 1800 vocabulary words.</li>
                            <li>Can read and comprehend main ideas of argumentative essays and editorials with reference works.</li>
                            <li>Can not read literary Chinese such as poetry without reference works.</li>
                            <li>Can write argumentative articles with advanced vocabularies and paragraph organization in about 1000 words but occasionally with incomplete sentences and incorrect words.</li>
                        </ol>
                    </td>
                    <td>
                        <ol>
                            <li>Can understand news on varies topics in high speaking speed.</li>
                            <li>Can use social expressions to communicate fluently with much less avoidance but sometimes have confusions about classic and vernacular Chinese when speaking.</li>
                            <li>Can comprehend Chinese culture and integrate into Chinese society well.</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td class="red C-first"></td>
                    <td  class="text-center">Advanced II</td>
                    <td>
                        <ol>
                            <li>Can understand about 1200 vocabulary words.</li>
                            <li>Can read and comprehend the gist and details of argumentative essays and editorials.</li>
                            <li>Can mostly read and comprehend classic Chinese such as poetry.</li>
                            <li>Can write argumentative articles with advanced vocabularies and paragraph organization in about 1500 words with little incomplete sentences and incorrect words.</li>
                        </ol>
                    </td>
                    <td>
                        <ol>
                            <li>Can understand discussions of issues in seminars and controversial events.</li>
                            <li>Can make written comments in Chinese on news and express opinions fluently.</li>
                            <li>Can well communicate and comment on complex subjects with additional hints.</li>
                            <li>Can comprehend Chinese culture and differentiate with others, able to appreciate Chinese cultural values.</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td class="red C-first"></td>
                    <td  class="text-center">Advanced III</td>
                    <td>
                        <ol>
                            <li>Can understand about 1000 vocabulary words.</li>
                            <li>Can read and comprehend the gist and cultural implication of argumentative essays and editorials.</li>
                            <li>Can read and comprehend a large extent of classic Chinese such as poetry and other famous works independently.</li>
                            <li>Can write argumentative articles with advanced vocabularies in about 2000 words with rare incomplete sentences and incorrect words.</li>
                        </ol>
                    </td>
                    <td>
                        <ol>
                            <li>Have native speaker level of Chinese. Can understand topics beyond one's own field.</li>
                            <li>Can well understand the meaning and implication of idioms and use them correctly.</li>
                            <li>Can give logical comments and fluent speeches.</li>
                            <li>Can have good competency in translation and interpreting.</li>
                            <li>Can demonstrate cross cultural communication as a sinologist.</li>
                        </ol>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
  </section>

  <?php include 'footer.php'; ?>
</body>
</html>
