<?
$subject_val = "Re: [OMPI devel] bug in mca_mpool_base_module_create()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 08:44:08 2009" -->
<!-- isoreceived="20090421124408" -->
<!-- sent="Tue, 21 Apr 2009 08:43:47 -0400" -->
<!-- isosent="20090421124347" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in mca_mpool_base_module_create()" -->
<!-- id="DE7C090B-231D-4355-9ABB-A2FA6B755A4F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45760.141.108.7.31.1240238389.squirrel_at_141.108.7.31" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug in mca_mpool_base_module_create()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 08:43:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5848.php">George Bosilca: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>Previous message:</strong> <a href="5846.php">Roberto Ammendola: "[OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>In reply to:</strong> <a href="5846.php">Roberto Ammendola: "[OMPI devel] bug in mca_mpool_base_module_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5848.php">George Bosilca: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>Reply:</strong> <a href="5848.php">George Bosilca: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!  I've committed a slightly different fix here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/21044">https://svn.open-mpi.org/trac/ompi/changeset/21044</a>
<br>
<p><p>On Apr 20, 2009, at 10:39 AM, Roberto Ammendola wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found a small bug in function mca_mpool_base_module_create() where  
</span><br>
<span class="quotelev1">&gt; if a
</span><br>
<span class="quotelev1">&gt; bad name is provided for mpool component, last iterated component is
</span><br>
<span class="quotelev1">&gt; returned, instead of NULL. I suggest a solution:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/mpool/base/mpool_base_lookup.c     (revision 21042)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/mpool/base/mpool_base_lookup.c     (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -75,11 +75,14 @@
</span><br>
<span class="quotelev1">&gt;      for (item = opal_list_get_first(&amp;mca_mpool_base_components);
</span><br>
<span class="quotelev1">&gt;           item != opal_list_get_end(&amp;mca_mpool_base_components);
</span><br>
<span class="quotelev1">&gt;           item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt; +         mca_mpool_base_component_t* c;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;           mca_base_component_list_item_t *cli =
</span><br>
<span class="quotelev1">&gt;             (mca_base_component_list_item_t *) item;
</span><br>
<span class="quotelev1">&gt; -         component =
</span><br>
<span class="quotelev1">&gt; +         c =
</span><br>
<span class="quotelev1">&gt;             (mca_mpool_base_component_t *) cli-&gt;cli_component;
</span><br>
<span class="quotelev1">&gt; -         if(0 == strcmp(component-&gt;mpool_version.mca_component_name,
</span><br>
<span class="quotelev1">&gt; name)) {
</span><br>
<span class="quotelev1">&gt; +         if(0 == strcmp(c-&gt;mpool_version.mca_component_name, name)) {
</span><br>
<span class="quotelev1">&gt; +             component = c;
</span><br>
<span class="quotelev1">&gt;               break;
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5848.php">George Bosilca: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>Previous message:</strong> <a href="5846.php">Roberto Ammendola: "[OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>In reply to:</strong> <a href="5846.php">Roberto Ammendola: "[OMPI devel] bug in mca_mpool_base_module_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5848.php">George Bosilca: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>Reply:</strong> <a href="5848.php">George Bosilca: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
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
