<section id="blog" class="blog">
      <div class="container">
            <article class="entry entry-single">

              <div class="entry-img">
                <img src="../assets/img/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">Building a Data Lake</h2>

              <div class="entry-content">
<p class="blog-p">There are several steps involved in the process of building a data lake.  These steps are Locate, Ingest, Transform, and Recycle.</p>
<h4 class="blog-subtitle">Locate</h5>
<p class="blog-p">Before you get started in building a data lake you have to decide where the data lake will actually reside.  This usually entails a choice between on premises data storage and cloud data storage.  Whatever the choice your data store needs to be scalable, available, and performant, secure, and redundant.</p>
<h4 class="blog-subtitle">Ingest</h5>
<p class="blog-p">Once you have decided where your data lake will be located it is time to begin “loading” data into the data lake.  We prefer the term “ingest” over the term “load” because “loading” often carries with it connotations of the Extract/Transform/Load process familiar to data warehouses.  The process of loading a data warehouse involves a lot of data preparation, but data lakes ingest data in its most raw form.</p>
<p class="blog-p">This data ingestion can take many forms:</p>
<ul>
    <li>Directing log files to the data lake.  Log file storage and analysis is a very common use case for a data lake.  You can configure applications to have their log files either written directly to data lake storage, or cached and bundled at defined intervals to be sent to the data lake.</li>
    <li>Pointing application-generated data to the data lake.  Many applications take in or generate raw binary data – images, schematics, audio, etc – and this data can use the data lake as its back end storage source.  This is a particularly good workflow for machine learning as often the data sent in can be crunched by machine learning algorithms on the backend for further insight.</li>
    <li>Extracting data from other systems – you might have currently-running data stores such as application databases, data marts, or data warehouses, and you want that data in more “raw” form so that it can be massaged into different formats. </li>
</ul>
<h4 class="blog-subtitle">Transform</h5>
<p class="blog-p">Once the data is in the data lake, the data is often transformed into other formats and used to load tools more specifically targeted to the usefulness of the data lake data.  There are several common use cases for the data in a data lake; these use cases are outlined below:</p>
<p class="blog-p"><b>Low Latency Search</b> – Often data from data lakes is in document form and an organization needs a way to search this information quickly.  These documents are stored in their base form in the data lake and then imported into search tools such as Elastic.</p>
<p class="blog-p"><b>Data Warehousing</b> – Data lake information is often used to feed data warehouses.  In our first article we discussed the difference between data lakes and data warehouses.  Data lakes are NOT a replacement for data warehouses at most levels.  Instead, the data lake sits in front of at least one (sometimes numerous) data warehouses and data marts that draw data from the data lake.  Traditional data cleansing procedures are performed on the data as it is copied from the data lake to the target data warehouse.  </p>
<p class="blog-p"><b>Data Visualization/Dashboards</b> – Data lake data is often fed into specialized data visualization systems that are then used to build complex dashboards and data visualizations.  A number of tools exist to visualize this data.</p>
<p class="blog-p"><b>Machine Learning/AI</b> – In the past decade the cost of computing power has fallen to the point where machine learning/AI algorithms are available to most organizations.  Machine learning algorithms are data gluttons – the more diverse data you can feed into the algorithms the better you can hone your machine learning algorithms and the more faithful their generated models will be to real-world conditions.  The use of data lakes in feeding machine learning will only increase in the next five years and organizations that do not have a plan to use such technology will face stiff competition from those that do.</p>
<p class="blog-p">Once the data is loaded into the data lake it can be operated upon for further insight.  There are several common “use cases” for data manipulation</p>
<ul>
        <li class="blog-p">The extraction and manipulation phase of a data lake takes in data from a data lake and changes it into different formats for later analysis.  To use the example of logs, the data lake might have file parsers that run over the contents of the raw logs, extract interesting entries, and move that data into a different data analysis tool that will allow end users to track interesting events.</li>
        <li class="blog-p">Some extraction/manipulation is used to prepare large amounts of data for machine learning algorithms.  The output from this manipulation is fed into tools such as TensorFlow, PyTorch, or Jupyter Notebook and used for further analysis.</li>
        <li class="blog-p">Some data is taken from the data lake, which becomes the authoritative raw data source, and repurposed into data marts.  For example, sales data might rest in the data lake in raw format, and then extracted into a data mart for executive analysis, and also a CRM tool for customer relationship tracking.</li>
</ul>
<h4 class="blog-subtitle">Recycle</h5>
<p class="blog-p">The process of ingesting, extracting, and analyzing often generates its own data and forms a circle.  We refer to this circle as data composting.  Data comes in from applications, is analyzed by machine learning algorithms or other analytics tools, and that process often generates its own new data which is fed back into the data lake and used in future iterations of data analytics.  </p>
<h2>Data Lake Tools</h2>
<p class="blog-p">There are a number of tools available to you as you build your data lake.  These tools facilitate the various steps of building the data lake, from storage and ingestion to analysis and search.  We will explore several of these toolsets here.</p>
<h4 class="blog-subtitle">Apache Toolsets</h4>
<h4 class="blog-subtitle">Hadoop</h4>
<p class="blog-p">Hadoop is an open source framework for handling big data. At its core Hadoop is known as a distributed file system.  What this means is that you can feed data into one point of entry, and then Hadoop divides the storage of that information across many computing nodes.  This provides several advantages.  First, this ensures data redundancy.  One file might be replicated across dozens of nodes in a Hadoop framework, which ensures that your data lake will continue to be fully functional even if several of the Hadoop nodes are not operational.  This protects the availability of the data lake in the event of hardware or software problems.</p>
<p class="blog-p">Hadoop’s distributed nature powers its ability to perform fast querying over large-scale data sets.  Hadoop’s core querying technology, MapReduce, allows a user to define instructions for operations upon data.  Once Hadoop has the instructions, it coordinates the execution of instructions across its many data nodes.  Because of the distributed nature of the data within the Hadoop architecture, this means in practice that Hadoop queries are run across many nodes simultaneously.  This “divide and conquer” approach allows for fast querying over enormous datasets.  A search or calculation that might take a very long time on one computing node can be reduced to a fraction of the time when distributed over many nodes.</p>
<h4 class="blog-subtitle">Spark</h4>
<p class="blog-p">Hadoop contains some querying facilities, but Spark is focused almost exclusively on performing intensive queries on large data sets.   It allows you to connect to large data sets anywhere, and perform parallel operations on those datasets.  It supports a number of statistical and querying languages such as Python, Java, R, and SQL.</p>
<h4 class="blog-subtitle">Elastic Tools (ELK stack)</h4>
<h4 class="blog-subtitle">Elasticsearch</h4>
<p class="blog-p">Over the past decade JSON (Javascript Object Notation) has come to dominate the web.  It is a flexible, lightweight object description format that is used to send data between APIs, front end web servers, and client browsers.  Traditionally most organizational data has been stored in relational databases, so systems contain an additional layer that translates the information from the relational database into JSON and back again.  Recently many developers have begun to question whether that step is actually necessary and whether it might be better to store the data in JSON format natively.  A number of storage solutions have sprung up to meet that need, including Elastic.</p>
<p class="blog-p">Elastic is optimized to work around JSON documents and allows for fast and easy management of documents within the document store.  Fast document search is the primary reason why Elastic is deployed as part of a data lake.  Like Hadoop, Elastic can be configured to spread its data over many computing/storage nodes, but it presents a unified interface and API where data can easily be added, removed, updated, and searched, all using intuitive JSON language.  </p>
<h4 class="blog-subtitle">Beats and Logstash</h4>
<p class="blog-p">Elastic offers Beats and Logstash as easy ways to move data into the Elastic Search engine.  These tools function as easy to configure services and monitors.  These monitors run on your servers, take high frequency data such as server logs and network traffic, and send them to Elasticsearch.</p>
<h4 class="blog-subtitle">Kibana</h4>
<p class="blog-p">Kibana is the data visualization arm of the elastic family.  It allows for a user of Elastic to create dashboards based on queries run against the backend Elasticsearch store.  Kibana is used frequently in server monitoring and tracking web hits for various properties, but it can be configured to provide dashboards of all sorts of data.</p>
<h4 class="blog-subtitle">TensorFlow and PyTorch</h3>
<p class="blog-p">TensorFlow and PyTorch are machine learning frameworks that allow data scientists to build machine learning models with ease.  </p>
<p class="blog-p">In our <a href="../data-lake-cloud-options">next article</a> we will discuss some of the most common tools used to work with data lakes.  We will also look at several cloud vendors and their approaches to building a data lake.</p>
</div>
</article><!-- End blog entry -->
</section><!-- End Blog Section -->