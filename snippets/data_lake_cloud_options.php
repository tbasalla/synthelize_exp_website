<section id="blog" class="blog">
      <div class="container">
            <article class="entry entry-single">

              <div class="entry-img">
                <img src="../assets/img/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Data Lake Solutions</a>
              </h2>

              <div class="entry-content">
<p class="blog-p">In this article we will be exploring three major cloud vendors – Amazon Web Services, Azure, and Google Cloud Platform – and their distinct data lake/big data tools.  In the previous article we explored a few of the tools that help to build and use data lakes.  These toolsets are almost all supported as hosted versions in each of the major cloud platforms.  This allows you to spin up, say, Hadoop or Elastic and evaluate it before you commit to building a full implementation.  In addition to the tools listed previously, each cloud provider has their own native flavors of data lake tools to work with.  In some cases these native versions may offer performance gains as they are more deeply integrated into the cloud infrastructure.</p>
<h4 class="blog-subtitle">Amazon Web Services (AWS)</h4>
<h5 class="bold-header">AWS Lake Formation </h5> 
<p class="blog-p">AWS Lake Formation provides a wizard type interface over various pieces of the AWS ecosystem that allow you easily to build a data lake.  The primary backend storage of an AWS data lake is its S3 storage.  S3 storage is highly scalable and available and can be made redundant across a number of availability zones.  For less frequently used data/archives, Amazon Glacier offers you the option to store data in archives that have much longer retrieval times but at a fraction of the cost of S3 storage.  This allows you to contain your storage costs by dividing storage needs into availability needs.</p>
<h5 class="bold-header">AWS Glue </h5> 
<p class="blog-p">Aws Glue is a set of tools that allow you to perform ETL procedures upon data.  You can use it as a sort of data mapping tool that can be pointed to any other AWS storage to define relationships.  Once you have defined these relationships you can schedule tasks to be run that query, copy, and move data from one place to another.  These tools are helpful when you are dealing with a large number of data assets in the AWS ecosystem.</p>
<h5 class="bold-header">AWS Athena </h5>  
<p class="blog-p">AWS Athena is a clever tool which allows you to bypass the step of creating a traditional relational data warehouse or Hadoop cluster by leveraging data already residing in S3 storage.  It allows you to create virtual table definitions on top of your data and then run standard SQL queries to obtain results from those definitions.  </p>
<h5 class="bold-header">AWS Redshift </h5> 
<p class="blog-p">AWS Redshift is AWS’ high performance data warehouse which allows for querying and analysis at exabyte scale.</p>
<h4 class="blog-subtitle">Microsoft Azure</h4>
<h5 class="bold-header">Azure Data Lake</h5>
<p class="blog-p">Azure Data Lake is the competitor to AWS Cloud Formation.  As with AWS, Azure Data Lake is centered around its storage capacity, with Azure blob storage being the equivalent to Amazon S3 storage.  Azure Data Lakes rely heavily on the Hadoop architecture.</p>
<h5 class="bold-header">HDInsight</h5>
<p class="blog-p">HDInsight is Microsoft’s management layer above Hadoop and Spark.  You can use HDInsight to easily spin up Hadoop or Spark clusters and manage workloads.</p>
<h5 class="bold-header">Azure Data Lake Analytics</h5> 
<p class="blog-p">Azure Data Lake Analytics allows you to create, schedule, and process big data querying jobs.  Azure handles the creation of compute resources necessary to perform the analytics so you can focus on the query tasks themselves rather than the associated resources and infrastructure.</p>
<h5 class="bold-header">U-SQL</h5>
<p class="blog-p">U-SQL is a Microsoft developed language for big data, combining combines data mapping and querying facilities.  It provides language expressions for ETL operations, schema creation, and querying.</p>
<h5 class="bold-header">PowerBI</h5>  
<p class="blog-p">PowerBI allows you to create presentation layer dashboards on top of existing Azure data stores to leverage those data stores into actionable information. </p>
<h4 class="blog-subtitle">Google Cloud Platform (GCP)</h4>
<h5 class="bold-header">Google Cloud Storage</h5>
<p class="blog-p">Google Cloud Storage is the backend storage mechanism driving data lakes built on Google Cloud Platform.  As with other cloud vendors, Google Cloud Storage is divided into tiers (standard/nearline/coldline) by availability and access time (with less accessible storage being much cheaper).</p>
<h5 class="bold-header">Google DataProc</h5>
<p class="blog-p">Google DataProc manages the creation of computing and storage clusters for Hadoop and Spark.</p>
<h5 class="bold-header">BI Engine</h5> 
<p class="blog-p">BI Engine allows for the creation of dashboards and visualizations on top of Google Cloud Platform data lakes.</p>
<h5 class="bold-header">BigQuery</h5>
<p class="blog-p">BigQuery is the GCP engine which allows for data mapping to resources, querying, and automatic provisioning of computing resources on a query by query basis.  It also offers the BigQuery Data Transfer Service to move data from many other Google platforms (ads, Youtube, etc) into BigQuery.</p>
<h5 class="bold-header">BigQuery ML</h5>
<p class="blog-p">BigQuery ML is Google's tool for creating machine learning models based on BigQuery data.  Google has long been a leader in machine learning/AI research, so expect this component to become a centerpiece of Google's data offering.</p>
<h4 class="blog-subtitle">Conclusion</h4>
<p class="blog-p">In this series we learned the <a href="../what-is-a-data-lake">rationale</a> behind building a data lake.  We then <a  href="../building-a-data-lake">explored</a> how to build a data lake and the common tools used with data lakes.  Finally, in this article we explored the cloud data lake options.</p>
<p class="blog-p">We hope this series gave you a good overview of data lakes.  If you are interested in working with a partner in building your data lake, let's <a href="mailto:info@synthelize.com">connect</a> and develop your data strategy together.</p>
</div>
            </article><!-- End blog entry -->
    </section><!-- End Blog Section -->