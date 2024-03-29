<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="market.css">
</head>

<body>
    <section class="main-section market" aria-label="crypto market" data-section>
        <div class="container">
            <div class="section-header">
                <h2 class="section-heading">Market Updates</h2>
                <a href="home-page.php" class="home-button">Go to Home</a>
            </div>
            <div class="market-type">

                <ul class="tab-nav">

                    <li>
                        <button class="tab-button active">Crypto</button>
                    </li>

                    <li>
                        <button class="tab-button">DeFi</button>
                    </li>

                    <li>
                        <button class="tab-button">BSC</button>
                    </li>

                    <li>
                        <button class="tab-button">NFT</button>
                    </li>

                    <li>
                        <button class="tab-button">Metaverse</button>
                    </li>

                    <li>
                        <button class="tab-button">Polkadot</button>
                    </li>

                    <li>
                        <button class="tab-button">Solana</button>
                    </li>

                    <li>
                        <button class="tab-button">Opensea</button>
                    </li>

                    <li>
                        <button class="tab-button">Makersplace</button>
                    </li>

                </ul>

                <ul class="tab-content">

                    <li>
                        <div class="market-prices">

                            <div class="coin-name-wrapper">
                                <img src="BitcoinLogo.webp" width="24" height="24" alt="bitcoin logo">

                                <a href="#" class="coin-title">
                                    Bitcoin <span class="span">BTC/USD</span>
                                </a>
                            </div>

                            <data class="coin-value" value="46168.95">USD 46,168.95</data>

                            <div class="coin-analytics">
                                <data class="current-price" value="36641.20">36,641.20</data>

                                <div class="red-badge">-0.79%</div>
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="market-price active">

                            <div class="coin-name-wrapper">
                                <img src="EtherumLogo.jpg" width="24" height="24" alt="ethereum logo">

                                <a href="#" class="coin-title">
                                    Ethereum <span class="span">ETH/USD</span>
                                </a>
                            </div>

                            <data class="coin-value" value="3480.04">USD 3,480.04</data>

                            <div class="coin-analytics">
                                <data class="current-price" value="36641.20">36,641.20</data>

                                <div class="green-badge">+10.55%</div>
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="market-prices">

                            <div class="coin-name-wrapper">
                                <img src="tetherusd.png" width="24" height="24" alt="tether logo">

                                <a href="#" class="coin-title">
                                    Tether <span class="span">USDT/USD</span>
                                </a>
                            </div>

                            <data class="coin-value" value="1.00">USD 1.00</data>

                            <div class="coin-analytics">
                                <data class="current-price" value="36641.20">36,641.20</data>

                                <div class="red-badge">-0.01%</div>
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="market-prices">

                            <div class="coin-name-wrapper">
                                <img src="bnbLogo.png" width="24" height="24" alt="bnb logo">

                                <a href="#" class="coin-title">
                                    BNB <span class="span">BNB/USD</span>
                                </a>
                            </div>

                            <data class="coin-value" value="443.56">USD 443.56</data>

                            <div class="coin-analytics">
                                <data class="current-price" value="36641.20">36,641.20</data>

                                <div class="red-badge">-1.24%</div>
                            </div>

                        </div>
                    </li>

                </ul>

            </div>

        </div>
    </section>
    <section class="section market" aria-label="market update" data-section>
        <div class="container">

            <div class="title-wrapper">
                <h2 class="h2 section-title">Market Update</h2>

                <a href="#" class="btn-link">See All Coins</a>
            </div>

            <div class="market-tab">

                <ul class="tab-nav">

                    <li>
                        <button class="tab-btn active">View All</button>
                    </li>

                    <li>
                        <button class="tab-btn">Metaverse</button>
                    </li>

                    <li>
                        <button class="tab-btn">Entertainment</button>
                    </li>

                    <li>
                        <button class="tab-btn">Energy</button>
                    </li>

                    <li>
                        <button class="tab-btn">NFT</button>
                    </li>

                    <li>
                        <button class="tab-btn">Gaming</button>
                    </li>

                    <li>
                        <button class="tab-btn">Music</button>
                    </li>

                </ul>

                <table class="market-table">

                    <thead class="table-head">
                        <tr class="table-row table-title">
                            <th class="table-heading"></th>
                            <th class="table-heading" scope="col">#</th>
                            <th class="table-heading" scope="col">Name</th>
                            <th class="table-heading" scope="col">Price</th>
                            <th class="table-heading" scope="col">Last 24h(%)</th>
                            <th class="table-heading" scope="col">Market Cap</th>
                            <th class="table-heading" scope="col">Last 7 Days</th>
                            <th class="table-heading"></th>

                        </tr>

                    </thead>

                    <tbody class="table-body">
               
               
                    <?php
    include_once 'userRepository.php';

    $userRepository = new UserRepository();

    $coins = $userRepository->getAllCoins();

        foreach ($coins as $coin) {
            echo '
             <tr class="table-row">
                 <td class="table-data">
                     <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                         <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                         <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                      </button>
                 </td>
                  <th class="table-data rank" scope="row">' . $coin['ID'] . '</th>
                  <td class="table-data">
                      <div class="wrapper">
                          <h3>
                               <a href="#" class="coin-name"> <span class="span">' . $coin['Name'] . '</span></a>
                          </h3>
                     </div>
                 </td>
                 <td class="table-data last-price">$' . $coin['Price'] . '</td>
                 <td class="table-data last-update green">' . $coin['Last_24h'] . '%</td>
                  <td class="table-data market-cap">$' . $coin['Market_Cap'] . '</td>
                  <td class="table-data">' . $coin['Last_7_Days'] . '</td>
              </tr>';
}
?>
                    
                    </tbody>

                </table>

            </div>

        </div>
    </section>

    <footer class="footer">
        <button class="back-to-top-btn" onclick="scrollToTop()">Back to Top</button>
    </footer>

    <script>
        function scrollToTop() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
        }
    </script>
</body>

</html>