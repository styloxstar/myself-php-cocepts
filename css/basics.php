<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic CSS</title>
    <link rel="stylesheet" href="basics.css">
</head>

<body>


    <!-- <div class="makeCenter">
    Hello, World of css
</div> -->


    <div class="container">
        <div class="heading">Disply-Inline</div>
        <p class="desc">
            Display Inline takes minimum along with white space to cover elements and does not supports height and width property
        </p>
        <div>
            <div class="d-inline">abcd</div>
            <div class="d-inline">pqr</div>
        </div>
        <hr>

        <div class="heading">Display:Block</div>
        <p class="desc">
            Display block is default style, it places elements below to each elements and supports height and width property
        </p>
        <div>
            <div class="d-block">abcd</div>
            <div class="d-block">pqr</div>
        </div>
        <hr>

        <div class="heading">Display:Inline-block</div>
        <p class="desc">
            Display Inline takes minimum along with white space to cover elements and but it supports height and width property
        </p>
        <div>
            <div class="d-inline-block">abcd</div>
            <div class="d-inline-block">pqr</div>
        </div>
        <hr>

        <div>
            <div class="heading">Span</div>
            <p class="desc">
                span works same as display inline, also does not suppors height and width property
            </p>
            <span>abcd</span>
            <span>pq</span>
            <span>rs</span>
            <span>tw</span>
        </div>

        <hr>
        <div class="heading">Flex</div>
        <p class="desc">
            flex takes the available space and fills the elements ignoring whitespace as well
        </p>

        <div style="display:flex">
            <div>abcd</div>
            <div>pq</div>
            <div>rs</div>
            <div>tw</div>
        </div>

        <hr>
        <div class="heading">Flex</div>
        <p class="desc">
            flex takes the available space and fills the elements ignoring whitespace as well
        </p>

        <div style="display:flex">
            <div>abcd</div>
            <div>pq</div>
            <div>rs</div>
            <div>tw</div>
        </div>
    </div>


    <div class="container">
        <div class="heading">Gradient</div>


        <div class="gLinear">
            Linear Gradient
        </div>

        <div class="gRadial">
            Radial Gradient
        </div>
    </div>


    <div class="container">
        <div class="heading">Background with Color and Images</div>

        <div class="bgImage text-center">
            Background-Image
        </div>

        <div class="gdImage text-center">
            Background-image using gradient
        </div>

    </div>

    <div class="container">
        <div class="heading">Selectors</div>
        <div>
            .divSelector>p
        </div>
        <div class="childSelector">

            <p>All p tag enclosed within .childSelector class will have color red</p>
            <div>check</div>
            <p>check child</p>

        </div>

        <div class="descendentSelector">
            .descended p
            <p>All p tag enclosed within .descendentSelector class will have color green</p>
            <div>check</div>
            <p>check child</p>

        </div>

        <div class="adjacentSelector">
                <div>
                    .adjacent+p
                </div>
            <p>first p tag next to .adjacentSelector class will have color blue</p>
            <div>check</div>
            <p>check child</p>
        </div>

        <div class="generalAdjacentSelector">
                <div>
                    .GeneralAdjacent~p
                </div>
            <p>All p tag after .adjacentSelector class will have color hotpink</p>
            <div>check</div>
            <p>check child</p>

        </div>


    </div>


    <div class="container">
        <div class="heading">
            Pseudo Classes and Elements
        </div>

        <div class="pseudoElements">

            <div class='element'>
                I am Pseudo Element
            </div>


            <div class="paragraph">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsa nam fuga expedita illo autem, doloribus assumenda laborum incidunt cupiditate aliquam id accusamus iste praesentium sapiente, natus nisi commodi. Quos!

            </div>



        </div>

        <div class="pseudoClasses">
            <p>
                a:active selects active link <a href="https://www.google.com">Active</a>
            </p>

            <p>
                a:hover selects when hover on link <a href="https://www.google.com">Hover</a>
            </p>

            <p>
                a:link selects all unvisited link <a href="https://www.google.com">UnVisited</a>
            </p>

            <p>
                a:visited selects active link <a href="https://www.google.com">Visited</a>
            </p>


            <div>
                <p class="child">First Child</p>
                <p class="child">Second-child</p>
                <p class="child">Last-child</p>

            </div>



        </div>
    </div>


    <div class="container">
        <div class="heading">Text-OverFlow</div>

        <p>Nowrap takes one line and if content is too big it will display one line from that content</p>
        <p>It is used to avoid paragrapgh/line breaking</p>

        <div class="nowrap">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, ab! Maxime optio repellendus necessitatibus nemo earum. Ab fugit, voluptas est dicta ipsa, iusto eum atque magni, expedita reprehenderit incidunt vitae?
            Perspiciatis nulla facere molestiae inventore exercitationem repudiandae doloremque fuga repellat repellendus beatae doloribus aliquid temporibus recusandae neque blanditiis iusto veniam suscipit consequuntur consequatur, amet hic tempora ea dolore aspernatur. Quis?
            Accusantium aperiam porro officia et, ratione, dignissimos illo quisquam itaque voluptas voluptate, explicabo sit doloribus! Aspernatur, animi, enim eaque soluta blanditiis velit optio mollitia, ea cumque aliquam harum neque iure.
            Nisi amet hic itaque neque reprehenderit optio sed dicta incidunt aspernatur officia, illo ratione possimus magnam iste omnis repellendus ducimus velit? Veniam repellat aliquid amet consequuntur cum, maxime iste optio!
        </div>


        <p>to avoid overlapping of elemets and apply break using word-break:break-all => breaks at end of line, word-wrap:break-word=>breaks at meaningful word</p>

        <br>
        <div class="word-break">

            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt alias nihil asperiores, ipsum accusantium fugit doloremque dolorem deleniti molestiae voluptatibus vitae impedit ut. Iste consequatur mollitia quis doloremque accusamus nemo.

        </div>
        <br>
        <div class="word-wrap">

        Hey my name is deepak, i am professional web developer, i love working with front end and with backend technologies along with database stuff,  love to design and to provide optimium solution to clinets solving their real-world problem and help them gro their business.

        </div>




    </div>







</body>

</html>