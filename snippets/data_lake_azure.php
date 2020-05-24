    <section id="blog" class="blog">
      <div class="container">
            <article class="entry entry-single">

              <div class="entry-img">
                <img src="../assets/img/azure-data-lake.jpg" alt="Data Lake Azure Image" class="img-fluid">
              </div>

              <h2 class="entry-title">Building a Data Lake on Microsoft Azure</h2>

              <div class="entry-content">
              <p>In <a href="../data-lake-cloud-options" target="_new">another article</a> we discussed various cloud options for building data lakes. Because many large organizations are using Microsoft’s technology extensively, from SQL Server and the .NET framework, Office, Exchange, Sharepoint and the like, it makes sense to consider Azure a strong contender for building a data lake to store that information.  Microsoft has incentive to ensure that there is seamless integration among all its offerings, so it currently has, and will continue to develop, easy integrations between its products and between those products and its Azure data lake offerings.</p>
<p>Microsoft has also made some strategic acquisitions that will push the developer community in the direction of the Azure platform.  Its acquisition of GitHub (and GitHub’s subsequent acquisition of npm), put two of the most important tools currently in the developer ecosystem firmly under Microsoft’s supervision.  These acquisitions will eventually funnel (if even in a gentle way) developers toward the Azure ecosystem.  Microsoft has a great track record for developer support.</p>
<h3>Azure Blob Storage</h3>
<p>As we discussed in our previous article, the foundation of any data lake is low-latency, ultra-scalable data storage.  When building something as large in scope as a data lake it is important to have unlimited disk storage available to you to point your “firehoses” of data.  Azure provides this foundation through its Azure Blob Storage product.</p>
<p><a href="https://azure.microsoft.com/en-us/services/storage/blobs/" target="_new">https://azure.microsoft.com/en-us/services/storage/blobs/</a></p>

<p>Blob Storage is available through secured endpoints so when developing ingestion into your data lake it is possible simply to point your stream to an endpoint.  Azure supports different types of blobs depending on the use case.  Some (block blobs) are optimized for objects that will be created or deleted, such as image files or other binary data.  Other are optimized to receive high frequency streams of updates, perfect for text log files and IoT.</p>  
<p>Most organization start their cloud data lake process with a lot of on-premises storage that needs to be migrated to the cloud platform.  It is always good to be sensitive to ingress and egress fees associated with cloud platforms because these fees can add large unexpected chunks to your data lake budget.</p> 
<p>As of the writing of this article Azure is offering FREE data ingress so that organizations have no financial barriers to putting data into Azure.  There are, however, data egress fees, so please be aware of that if you are executing a data strategy that involves moving data OUT of Azure and to on-premises or other cloud solutions.  Azure’s current ingress/egress pricing can be found here:  https://azure.microsoft.com/en-us/pricing/details/bandwidth/</p>
<p>Azure provides a number of ways to get data into the blob storage, including command line utilities like AzCopy.  For some organizations the volume of data is so great that it might take forever to transfer it from the network to the cloud storage provider.  For this use case Microsoft offers Azure Data Box, where they ship you large capacity storage devices.  You copy your data onto these devices locally, and then ship them back to Microsoft where they are loaded directly into blob storage in the local Azure network.</p>


<h3>Azure Logic Apps</h3>

<p>Moving data into and out of your blob storage to power other applications is one of the challenges of building a data lake.  Many tools allow you to do ETL processes; Microsoft offers Azure Logic Apps which allows you to define schemas of data sources and schedule movements of data between data sources.  This functionality can be very helpful as if you are executing your ETL logic locally you will be subject to egress fees. Azure Logic Apps allows you to orchestrate data movement from within the Azure cloud without having to spin up separate compute instances within Azure Cloud to perform these operations.</p>  
<p><a href="https://azure.microsoft.com/en-us/services/logic-apps/" target="_new">https://azure.microsoft.com/en-us/services/logic-apps/</a></p></p>

<h3>Data Lake Analytics</h3>

<p>Once you have a base of data blob storage it’s time to analyze that data and begin to derive value.  From here there are a number of tools at your disposal.</p>

<h4>U-SQL</h4>

<p>U-SQL is a hybrid language that allows a user to perform Structured Query Language (SQL) like operations directly on text files.  One of the limitations of traditional data warehouses is that they tend to require extensive Extract/Transform/Load operations (ETL) to move data from text files into the native table/row format of relational data warehouses.  Data lakes contain a lot of data in raw text format, and the speed at which that data grows makes the ETL process an unnecessary bottleneck.  U-SQL allows you to define virtual tables from large text files, and then perform standard SQL operations upon those virtual tables using familiar syntax.  It also allows you to store the results of these queries easily to other text files for analysis.  So for example a text file might contain billions of rows of customer interactions on a website.  U-SQL allows you to load that file, extract only a few columns from the file, and then filter and output a new text file that contains a subset of the data.  It also allows you to integrate C#, Python, and R modules into your workflow, allowing those with more programming savvy to perform advanced operations on data.</p>
<p><a href="https://azure.microsoft.com/en-us/blog/get-started-with-u-sql-it-s-easy/" target="_new">https://azure.microsoft.com/en-us/blog/get-started-with-u-sql-it-s-easy/</a></p>

<h4>HDInsight</h4>

<p>Organizations that have some experience in building big data solutions may have made extensive use of free open source software such as Apache Spark and Hadoop.  These solutions powered businesses through the first wave of on-premises big data work, and most organizations don’t want to throw away their investment in such technologies.  Azure fully supports managed versions of Hadoop, Spark, and Kafka while providing the potential for scaling well beyond the on-premises data centers of even most large companies.  This scaling makes sense for organizations that have spikes in data analytics activity, allowing them to reduce their investment in on-premises hardware and expertise while still giving them access to nearly unlimited scaling based on their workloads.</p>
<p><a href="https://azure.microsoft.com/en-us/services/hdinsight/" target="_new">https://azure.microsoft.com/en-us/services/hdinsight/</a></p>

<h4>DataBricks</h4>

<p>Azure also supports DataBricks, a growing platform built around Apache Spark and dedicated to machine learning.  DataBricks functions in a way similar to HDInsight in the sense that compute power can be scaled up and down according to demand.</p>
<p><a href="https://azure.microsoft.com/en-us/services/databricks/" target="_new">https://azure.microsoft.com/en-us/services/databricks/</a></p>

<h3>PowerBI</h3>

<p>One of the goals of data lakes is to distill massive amounts of data into actionable insights that can inform decision making.  Therefore one of the “outputs” of a data lake should be to some data visualization platform targeted to business decision making.  Microsoft’s PowerBI is the perfect tool for such visualization.</p>
<p>PowerBI allows the creation of data reports, dashboards, and presentations – it can be pointed to server instances in Azure to produce compelling data reports.  A common workflow using PowerBI is to extract data from the raw data lake storage using some ETL tool such as Azure Logic Apps and store it into a more traditional data warehouse or data mart format.  Then PowerBI is pointed at that data store for reporting purposes.  </p>
<p><a href="https://powerbi.microsoft.com/en-us/" target="_new">https://powerbi.microsoft.com/en-us/</a></p>

<h3>Machine Learning – Azure Machine Learning</h3>

<p>Often the end goal of building a data lake is to discover previously unknown relationships between aspects of a business.  Data scientists are using machine learning algorithms more and more to mine these insights and deploy them for increased business efficiency.  </p>
<p>Machine learning algorithms are computationally expensive and therefore perfectly suited to the on-demand nature of cloud computing.  Azure Machine Learning compute instances allow you spin up a perfect machine learning environment with all the tools already available – tools such as R, Python, Jupyter Notebook, Visual Studio Code, Pandas, PyTorch, TensorFlow, and Azure Machine Learning SDK.</p>
<p><a href="https://docs.microsoft.com/en-us/azure/machine-learning/concept-compute-instance" target="_new">https://docs.microsoft.com/en-us/azure/machine-learning/concept-compute-instance</a></p>


<p>Building a machine learning pipeline is a daunting task, but Azure offers a number of tools to make it easier.  Machine Learning Designer is a simple drag-and-drop interface for creating a machine learning pipeline.</p>
<p>When your models are created, Azure offers the ability to convert them to Open Neural Network Exchange format to be run at high performance on a variety of platforms.</p>
<p><a href="https://docs.microsoft.com/en-us/azure/machine-learning/concept-onnx" target="_new">https://docs.microsoft.com/en-us/azure/machine-learning/concept-onnx</a></p>


<h3>Conclusion</h3>

<p>It is clear that Microsoft is positioning Azure to take the lead in the creation and use of data lakes.  The tools and scale available in the Azure cloud platform make it a natural choice for those looking to start the process of building an organizational data lake.  Do you want to work with a partner to build a data lake on Azure?  <a href="mailto:info@synthelize.com"  onclick="javascript:saveclick();">Contact us</a> and we can help you every step of the way.</p>
              </div>
            </article><!-- End blog entry -->
    </section><!-- End Blog Section -->