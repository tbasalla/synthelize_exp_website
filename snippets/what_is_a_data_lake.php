<section id="blog" class="blog">
      <div class="container">
            <article class="entry entry-single">

              <div class="entry-img">
                <img src="../assets/img/what-is-a-data-lake.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">What is a Data Lake?</h2>

              <div class="entry-content">
            <p>Thirty years ago only a very small sliver of organizations had to worry about this “big data”.  Data storage was relatively expensive, and developing the processes to capture that data was time consuming.  Most organizations were happy to develop a few procedures to move their data into data warehouses.</p>
            <p>Much has changed in the ensuing decades.  Regulations have dictated that organizations save much more data than before.  The price of storage and compute power have dropped to the point where it feels like a mistake NOT to save as much data as possible.  Cloud platforms have emerged that have enabled a “save everything” approach.  Many organizations that would not have called themselves “data driven” a decade ago are struggling with the big data problem.</p>
            <p>Organizational data comes in many forms – spreadsheets, text files, images, complex models, databases, JSON/XML, and other industry-proprietary formats.  Though the amount of data generated and collected by organizations is increasing at an ever-accelerating pace, the capacity for internal IT staff to keep up with that data and give it a home is not.</p>
            <p>Traditionally data warehouses have been used to deal with the increasing volume of data.  However, over the past decade, the data landscape has changed and data warehouses are no longer the best “first pass” data storage.  Data warehouses are optimized around well-structured data that has been cleansed and formatted for analytics.  They do not work well with image data, JSON/XML, or high frequency data such as logs and IoT endpoints.</p>
            <h4>Enter the Data Lake</h4>
            <p>The concept of a data lake has arisen in response to several relatively new trends in organizational data storage:</p>
            <ul>
                <li>The price of permanent data storage has become incredibly low, making it cost-effective to save data that in previous years might have been discarded in the name of preserving storage space.</li>
                <li>The march of data collection and analysis (as well as emerging regulations) dictate that what might not be useful today might have some use tomorrow.  Instead of choosing carefully a few fields from a data file, organizations are opting to store ALL the data in the anticipation that they may find some use for it in the future.</li>
                <li>Much of the organizational data is in formats that are not “relational database friendly”.  This includes image and audio data, office document formats, raw JSON/XML data, and other data that is not easily reducible to rows and columns.</li>
                <li>High frequency data endpoints (server logs, website hits, IoT events) are becoming a greater and greater share of data being generated.  This data needs to be stored, but the speed at which it piles up dictates that it needs a very simple storage mechanism.</li>
                <li>Relational data stores, such as traditional data warehouses, are now being seen as just one of a number of options for data storage and retrieval.  Increasingly the same data is being stored in several different applications depending on usage.  For example, product data might be fed into a document data store for fast search, a data mart to drive executive dashboards, and a traditional relational data warehouse for longer term analytics.</li>
            </ul>
            <h4>Data Warehouses vs. Data Lakes</h4>
            <p>At its root a data lake is nothing more than a highly scalable and performant raw data store where data can be staged.  What you do with that data is up to you.</p>
            <p>The following are some of the differences between data lakes and more traditional data warehouses:</p>
            <table style="border: 1px solid black; border-collapse: collapse">
                <tr >
                    <td style="border: 1px solid black; text-align: center"><b>Data Warehouse</b></td>
                    <td style="border: 1px solid black; text-align: center"><b>Data Lake</b></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black">Data is usually highly structured in nature and exists in the form of rows and columns.</td>
                    <td style="border: 1px solid black">Data does not need to be highly structured and can exist in any raw format.</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black">Elaborate Extract/Transform/Load (ETL) procedures are developed to move data into the data warehouse.</td>
                    <td style="border: 1px solid black">Data storage is as simple as writing files to disk.</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black">Data is structured with a particular end application (usually analytics) in mind.</td>
                    <td style="border: 1px solid black">Data can be massaged into other formats and exported for many different kinds of use cases.</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black">The back-end storage of the data warehouse often necessitates a commitment to a particular database vendor.</td>
                    <td style="border: 1px solid black">The back-end is usually simple disk storage and can be moved from one place to another.</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black">Data warehouses often have difficulty scaling beyond a certain size.</td>
                    <td style="border: 1px solid black">Scale is only limited to available storage space.</td>
                </tr>
            </table>
            <br/>
            <h4>What makes a great data lake?</h4>
            <p>Data lake implementation details can vary.  Some lakes are implemented on premises.  In recent years organizations have started to shift toward cloud-based data lakes.  Regardless of the implementation details, well-architected data lakes share a number of characteristics.</p>
            <p><b>Scalable</b> – There is not much point in creating a data lake if your data storage solution is not highly scalable.  Data lakes can grow to petabytes and even exabytes in size depending on your storage needs.  Cloud vendors have for the most part solved this problem by offering access to virtually unlimited storage.  On premises data lakes will have to deal with this problem by acquiring extensive NAS storage.</p>
            <p><b>Available</b> – This means that the data lake can be accessed by all the people and applications that need to use it –whether for writing data for storage or reading data for analytics or other uses.  Cloud vendors solve this problem through partitioning and access roles.  On premises solutions will involve similar provisioning of network/storage access.</p>
            <p><b>Performant</b> – Because of the amount of data being ingested, data lake storage needs to be highly performant, both from the network access perspective and the actual disk storage perspective.  This is one area where on-premises storage perhaps has an advantage over cloud storage.  Internal network connections are often much faster and offer far lower latency than the external network connections required to move data to the cloud.  Some of this difference is mitigated if many of your “data generating applications” already exist in cloud infrastructure.  Flexibility in disk storage is an advantage of  cloud providers – plans exist where you can direct your “freshest” data to highly responsive data stores, and as data ages, it can be archived to slower, lower-priority (and less expensive) storage.</p>
            <p><b>Secure</b> – With so much critical data in one place, security issues become paramount.  Unfortunately data security often runs at cross-purposes with other elements in this checklist.  There are several layers to security.  Cloud providers often handle operating system and network security for you, but, in theory, their data stores are accessible to all with the right permissions.  In contrast, an on-premises solution might allow you to hide the data behind your network firewalls, but you are responsible at the end of the day for patching, monitoring and mitigating all attacks against your network and infrastructure.</p>
            <p><b>Redundant</b> – Because so much organizational data is being stored in the data lake, it is critical to provide some sort of redundancy to the data lake.  Cloud vendors handle this process by allowing you to mirror data storage over a number of availability zones.  This physical separation of data copies reduces the risk of a catastrophic event wiping out years of organizational data.</p>
            <p>In our <a href="../building-a-data-lake">next article</a> we will explore the process of building a data lake.</p>
            </div>
</article><!-- End blog entry -->
</section><!-- End Blog Section -->