<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(SDGs)永續發展 - 性別平等</title>
    <style>
        /* 通用樣式 */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f9f9f9;
            line-height: 1.6;
            color: #333;
        }

        h1, h2 {
            color: #333;
            font-weight: bold;
        }

        /* Header */
        header {
            background-color: #3b8e7b;
            color: white;
            text-align: center;
            padding: 40px 20px;
        }

        header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2em;
        }

        /* 內容區 */
        .content {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 2em;
            margin-bottom: 30px;
            color: #3b8e7b;
        }

        /* SDGs 17項目標展示 */
        .sdgs-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .sdg-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .sdg-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .sdg-item h3 {
            font-size: 1.5em;
            margin-bottom: 15px;
        }

        .sdg-item p {
            font-size: 1.1em;
            color: #666;
        }

        /* 性別平等強調區 */
        .gender-equality {
            background-color: #e1f5e1;
            border-left: 5px solid #3b8e7b;
            padding: 30px;
            margin-top: 40px;
            text-align: center;
        }

        .gender-equality h2 {
            font-size: 2em;
            color: #3b8e7b;
            margin-bottom: 20px;
        }

        .gender-equality p {
            font-size: 1.2em;
            color: #555;
        }

        /* Footer */
        footer {
            background-color: #3b8e7b;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        footer a {
            color: #ffeb3b;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>(SDGs)永續發展 - 性別平等</h1>
        <p>聯合國於2015年通過的全球性目標，共有17項，旨在推動可持續發展與改善全球生活品質。</p>
    </header>

    <!-- 內容區 -->
    <div class="content">
        <!-- SDGs 17項目標 -->
        <section>
            <h2 class="section-title">SDGs 17項目標</h2>
            <div class="sdgs-container">
                <div class="sdg-item">
                    <h3>目標1</h3>
                    <p>消除貧窮</p>
                </div>
                <div class="sdg-item">
                    <h3>目標2</h3>
                    <p>消除飢餓</p>
                </div>
                <div class="sdg-item">
                    <h3>目標3</h3>
                    <p>健康與福祉</p>
                </div>
                <div class="sdg-item">
                    <h3>目標4</h3>
                    <p>優質教育</p>
                </div>
                <div class="sdg-item">
                    <h3>目標5</h3>
                    <p>性別平等</p>
                </div>
                <div class="sdg-item">
                    <h3>目標6</h3>
                    <p>清潔水與衛生</p>
                </div>
                <div class="sdg-item">
                    <h3>目標7</h3>
                    <p>可再生能源</p>
                </div>
                <div class="sdg-item">
                    <h3>目標8</h3>
                    <p>體面工作與經濟增長</p>
                </div>
                <div class="sdg-item">
                    <h3>目標9</h3>
                    <p>產業、創新與基礎建設</p>
                </div>
                <div class="sdg-item">
                    <h3>目標10</h3>
                    <p>減少不平等</p>
                </div>
                <div class="sdg-item">
                    <h3>目標11</h3>
                    <p>可持續城市與社區</p>
                </div>
                <div class="sdg-item">
                    <h3>目標12</h3>
                    <p>負責任消費與生產</p>
                </div>
                <div class="sdg-item">
                    <h3>目標13</h3>
                    <p>氣候行動</p>
                </div>
                <div class="sdg-item">
                    <h3>目標14</h3>
                    <p>海洋生態</p>
                </div>
                <div class="sdg-item">
                    <h3>目標15</h3>
                    <p>陸地生態</p>
                </div>
                <div class="sdg-item">
                    <h3>目標16</h3>
                    <p>和平與正義</p>
                </div>
                <div class="sdg-item">
                    <h3>目標17</h3>
                    <p>夥伴關係</p>
                </div>
            </div>
        </section>

        <!-- 性別平等區 -->
        <section class="gender-equality">
            <h2>性別平等 (目標5)</h2>
            <p>性別平等是永續發展的基石，旨在消除對所有女性和女孩的歧視，並確保她們享有與男性平等的機會與權利。</p>
            <p>性別平等不僅能改善女性的社會地位，還能促進整體經濟和社會的穩定與發展。</p>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>了解更多，請訪問 <a href="https://www.un.org/sustainabledevelopment/gender-equality/" target="_blank">聯合國永續發展目標網站</a></p>
    </footer>

</body>
</html>
