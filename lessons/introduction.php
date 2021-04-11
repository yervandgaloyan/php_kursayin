
<div class="container">
    <br>
    <h2>HTML Introduction</h2>
    <p>HTML is the standard markup language for creating Web pages.</p>

    <hr>

    <h3>What is HTML?</h3>
    <ul>
        <li>HTML stands for Hyper Text Markup Language</li>
        <li>HTML is the standard markup language for creating Web pages</li>
        <li>HTML describes the structure of a Web page</li>
        <li>HTML consists of a series of elements</li>
        <li>HTML elements tell the browser how to display the content</li>
        <li>HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.</li>
    </ul>
    <br/>
    <h4>A Simple HTML Document</h4>
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-6 p-3">
            <!-- <iframe src="highlight.php" id="codeInput" width="100%" height="100%"></iframe> -->
        <pre id="myDiv">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;PageTitle&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;h1&gt;My First Heading&lt;/h1&gt;
                &lt;p&gt;My first paragraph.&lt;/p&gt;
            &lt;/body&gt;
        &lt;/html&gt;
        </pre>            
        </div>
    </div>
    <form action="onlineEditor.php" method="POST">
        <input type="hidden" name="insert"
        value="%3C!DOCTYPE%20html%3E%0A%3Chtml%3E%0A%09%3Chead%3E%0A%09%09%3Ctitle%3EPage%20Title%3C%2Ftitle%3E%0A%09%3C%2Fhead%3E%0A%09%3Cbody%3E%0A%09%09%3Ch1%3EMy%20First%20Heading%3C%2Fh1%3E%0A%09%09%3Cp%3EMy%20first%20paragraph.%3C%2Fp%3E%0A%09%3C%2Fbody%3E%0A%3C%2Fhtml%3E">
        <button type="submit" class="btn btn-success" >Try it Yourself >></button>
    </form>
    <br/>
    <h4>Example Explained</h4>
    <ul>
        <li>The <span class="text-danger">&lt;!DOCTYPE html&gt;</span>declaration defines that this document is an HTML5 document</li>
        <li>The <span class="text-danger">&lt;html&gt;</span> element is the root element of an HTML page</li>
        <li>The <span class="text-danger">&lt;head&gt;</span> element contains meta information about the HTML page</li>
        <li>The <span class="text-danger">&lt;title&gt;</span> element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab)</li>
        <li>The <span class="text-danger">&lt;body&gt;</span> element defines the document's body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.</li>
        <li>The <span class="text-danger">&lt;h1&gt;</span> element defines a large heading</li>
        <li>The <span class="text-danger">&lt;p&gt;</span> element defines a paragraph</li>
    </ul>
    <br/>
    <h3>What is an HTML Element?</h3>
    <p>An HTML element is defined by a start tag, some content, and an end tag:</p>
    <span class="text-danger">&lt;tagname&gt;</span>Content goes here...<span class="text-danger">&lt;/tagname&gt;</span>
    <p>HTML <b>element</b> is everything from the start tag to the end tag:</p>
    <span class="text-danger">&lt;h1&gt;</span>My First Heading<span class="text-danger">&lt;/h1&gt;</span>
    <span class="text-danger">&lt;p&gt;</span>My first paragraph.<span class="text-danger">&lt;/p&gt;</span>
    <br/>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Start tag</th>
            <th scope="col">Element content</th>
            <th scope="col">End Tag</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>&lt;h1&gt;</th>
            <td>My First Heading</td>
            <td><b>&lt;/h1&gt;</b></td>
          </tr>
          <tr>
            <th>&lt;p&gt;</th>
            <td>My first paragraph.</td>
            <td><b>&lt;/p&gt;</b></td>
          </tr>
          <tr>
            <th>&lt;br/&gt;</th>
            <td>none</td>
            <td>none</td>
          </tr>
        </tbody>
    </table>

      <br/>

    <div class="alert alert-warning" role="alert">
        <b>Note:</b> Some HTML elements have no content (like the &lt;br&gt; element). These elements are called empty elements. Empty elements do not have an end tag!
    </div>

    <br/>
    <h4>Web Browsers</h4>
    <p>The purpose of a web browser (Chrome, Edge, Firefox, Safari) is to read HTML documents and display them correctly.</p>
    <p>A browser does not display the HTML tags, but uses them to determine how to display the document:</p>
    <div class="row">
        <div class="col">
            <img class="img-fluid" src="img/browser.png" alt="browser">

        </div>
    </div>
    <br/>
    <h4>HTML Page Structure</h4>
    <p>Below is a visualization of an HTML page structure:</p>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div style="width:99%;border:1px solid grey;padding:3px;margin:0;background-color:#ddd">&lt;html&gt;
                <div style="width:90%;border:1px solid grey;padding:3px;margin:20px">&lt;head&gt;
                <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;title&gt;Page title&lt;/title&gt;
                </div>
                &lt;/head&gt;
                </div>
                <div style="width:90%;border:1px solid grey;padding:3px;margin:20px;background-color:#ddd">&lt;body&gt;
                <div style="width:90%;border:1px solid grey;padding:3px;margin:20px;background-color:#fff">
                <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;h1&gt;This is a heading&lt;/h1&gt;</div>
                <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;p&gt;This is a paragraph.&lt;/p&gt;</div>
                <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;p&gt;This is another paragraph.&lt;/p&gt;</div>
                </div>
                &lt;/body&gt;
                </div>
                &lt;/html&gt;
            </div>
        </div>  
    </div>
    <br/>
    <div class="alert alert-warning" role="alert">
        <b>Note:</b> The content inside the &lt;body&gt; section (the white area above) will be displayed in a browser. The content inside the &lt;title&gt; element will be shown in the browser's title bar or in the page's tab.
    </div>

    <br/>
    <h4>HTML History</h4>
    <p>Since the early days of the World Wide Web, there have been many versions of HTML:</p>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Year</th>
            <th scope="col">Version</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1989</th>
            <td>Tim Berners-Lee invented www</td>
          </tr>
          <tr>
            <th>1991</th>
            <td>Tim Berners-Lee invented HTML</td>
          </tr>
          <tr>
            <th>1993</th>
            <td>Dave Raggett drafted HTML+</td>
          </tr>
          <tr>
            <th>1995</th>
            <td>HTML Working Group defined HTML 2.0</td>
          </tr>
          <tr>
            <th>1997</th>
            <td>W3C Recommendation: HTML 3.2</td>
          </tr>
          <tr>
            <th>1999</th>
            <td>W3C Recommendation: HTML 4.01</td>
          </tr>
          <tr>
            <th>2000</th>
            <td>W3C Recommendation: XHTML 1.0</td>
          </tr>
          <tr>
            <th>2008</th>
            <td>WHATWG HTML5 First Public Draft</td>
          </tr>
          <tr>
            <th>2012</th>
            <td>WHATWG HTML5 Living Standard</td>
          </tr>
          <tr>
            <th>2014</th>
            <td>W3C Recommendation: HTML5</td>
          </tr>
          <tr>
            <th>2016</th>
            <td>W3C Candidate Recommendation: HTML 5.1</td>
          </tr>
          <tr>
            <th>2017</th>
            <td>W3C Recommendation: HTML5.1 2nd Edition</td>
          </tr>
          <tr>
            <th>2017</th>
            <td>W3C Recommendation: HTML5.2</td>
          </tr>
        </tbody>
    </table>

    <br/>
    <div class="alert alert-warning" role="alert">
        This tutorial follows the latest HTML5 standard.
    </div>
    <div class="row justify-content-end">
      <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <button type="button" class="btn btn-success" onclick="//window.location.replace('questions/introduction.php');">Unlock Next Stage</button>
      </div>
    </div>
    <br/>
</div>
<script src="js/nativeHTMLHighlight.js"></script>
