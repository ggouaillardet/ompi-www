<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 10:20:04 2013" -->
<!-- isoreceived="20130507142004" -->
<!-- sent="Tue, 7 May 2013 07:19:57 -0700" -->
<!-- isosent="20130507141957" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk" -->
<!-- id="B3A244E3-C79C-40AC-BF7C-78B0527F282E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BA56EE1A-CC0B-4DDA-A844-105459B89CC4_at_open-mpi.org" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 10:19:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12370.php">Joshua Ladd: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3592: btl_openib: change SRQ defaults"</a>
<li><strong>Previous message:</strong> <a href="12368.php">Ralph Castain: "Re: [OMPI devel] Q: project based MCA param files"</a>
<li><strong>In reply to:</strong> <a href="12367.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12371.php">Thomas Naughton: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<li><strong>Reply:</strong> <a href="12371.php">Thomas Naughton: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Crud - it just struck me that you don't want to do one thing in that patch.
<br>
<p><span class="quotelev1">&gt; + Avoid adding &quot;ignored&quot; frameworks to the autogenerated &quot;frameworks.h&quot;
</span><br>
<span class="quotelev1">&gt;  header file.
</span><br>
<p><p>We use the frameworks.h file to &quot;discover&quot; the frameworks in ompi_info. Even if no components are built for that framework, there still are MCA params relating to the base of that framework. Sounds silly, I know - but there may be reasons to access those params - e.g., to set verbosity to verify that no components are being selected.
<br>
<p>I think we need those frameworks to be listed...
<br>
<p><p>On May 7, 2013, at 6:49 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 7, 2013, at 6:19 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 6, 2013, at 10:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could someone help me out a bit here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * I'm unaware of any mechanism for &quot;ignoring&quot; an entire framework. Was something added for that purpose?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's been in autogen.pl for a while -- check out the end of mca_process_framework() in autogen.pl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see - you didn't mean &quot;ignore the framework&quot;, you meant &quot;ignore all components in this framework&quot;. The two are not the same thing. Ignoring the framework would mean that we were somehow going to skip the base as well, which couldn't possibly work. We've talked about that before and never could figure out how to null-out all the framework level functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * What &quot;non-MCA&quot; projects are in our repository? Everything appears to be based on MCA plugins.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Looking at Trac, we eliminated all project/config directories when we did the OMPI-RTE abstraction. So what are we looping across at the end of autogen?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, we did.  ORNL specifically asked me/Nathan off-list if they could add this loop in, because they have some off-trunk repos (e.g., STCI) that both still use the config/ directory stuff and have non-MCA projects.  I didn't see any harm in these things; e.g., the loop only adds -I if the directory exists.  I.e., I saw it as being an attempt to be friendly to those who are trying to use our lower laters (ORTE and/or OPAL) with non-OMPI projects.  I thought this fit in well with the move-the-BTLs-down-to-OPAL philosophy.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That being said, if others disagree -- e.g., Ralph has a valid point: this is to help projects that are outside of our trunk -- let's discuss.  This will probably be a useful topic to discuss today on the teleconf.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't object to it being there as it is a &quot;no-op&quot; for us - there was just no explanation given as to why this was being done. So it looked like a patch based on an old version of the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12370.php">Joshua Ladd: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3592: btl_openib: change SRQ defaults"</a>
<li><strong>Previous message:</strong> <a href="12368.php">Ralph Castain: "Re: [OMPI devel] Q: project based MCA param files"</a>
<li><strong>In reply to:</strong> <a href="12367.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12371.php">Thomas Naughton: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<li><strong>Reply:</strong> <a href="12371.php">Thomas Naughton: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28456 - trunk"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>