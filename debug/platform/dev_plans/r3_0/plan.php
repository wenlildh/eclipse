<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Michael Rennie
	# Date:			August 25, 2006
	#
	# Description: This is the 3.0 plan item page, describing the items to be addressed in 
	#			   the 3.0 release of eclipse
	#
	#
	#****************************************************************************

	$pageTitle 		= "Platform Debug 3.0 Release Plan";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, release, 3.0, 3, 3.0.1, milestone";
	$pageAuthor		= "Debug Team";
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Overall 3.0 Plan</h3>
			
			<h4>The overall themes for platform debug are:</h4>
	      	<ul>
		        <li>scalability and extensibility for many debuggers</li>
		        <li>improved user experience</li>
		        <li>concurrency</li>
	      	</ul>
	      	<h4>Top Work Items</h4>
  			<ul>
		        <li>Scalability Issues 
		          	<ul>
			            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Filter the Debug UI based 
			              on dynamic debug contexts and activities</li>
			            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Provide global retargettable 
			              breakpoint creation/deletion actions</li>
			            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Improve step filtering for 
			              other debug models (toggle on/off to apply to all stepping actions)</li>
		          	</ul>
		        </li>
		        <li>Concurrency 
		          	<ul>
			            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Background label generation 
			              for Debug and Variables views</li>
		          	</ul>
		        </li>
		        <li>Context Menu Launching 
		          	<ul>
			            <li><img src="/eclipse/debug/images/progress.gif"> Provide appropriate launch actions (Run, 
			              Debug,...) in the context menu</li>
		          	</ul>
		        </li>
		        <li>Generic Console Enhancements 
		          	<ul>
			            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> The console will support 
			              buffering to support clients that produce console output quickly</li>
			            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> The console will support 
			              a maximum buffer size to support clients that produce large amounts 
			              of output</li>
		          	</ul>
		        </li>
		        <li>Platform Source Lookup Facilities 
		          	<ul>
			            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Provide common source lookup 
			              facilities in the Debug platform for common source repositories</li>
		          	</ul>
		        </li>
  			</ul>
  			
  			<h4>Planned Items</h4>
      		<ul>
        		<li>Launch Framework 
          		<ul>
            		<li>Extensible Launch Modes 
	              		<ul>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> run, debug...</li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> add &quot;profile&quot; 
			                  mode to the debug platform</li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> allow launch configuration 
			                  tab groups to specify a set of tabs per launch mode</li>
			                <li>launch actions should appear only when the mode is supported 
			                  by something in the SDK (requires workbench visibility support)</li>
	              		</ul>
            		</li>
            		<li>Environment Variables 
	              		<ul>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support for setting 
			                  environment variables per launch configuration (must be done 
			                  by each config type that requires it)</li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> launch tab for specifying 
			                  environment settings</li>
	              		</ul>
            		</li>
            		<li>String Substitution Variables 
	              		<ul>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> user defined variables 
			                  that can be referenced in launch configurations - such as <i>${some_variable}</i></li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> migrate string substitution 
			                  support to new plug-in <code>org.eclipse.core.variables</code></li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> extension point for 
			                  variable definition supporting a default value, optional initializer 
			                  (delegate), and optional resolver (allows resolution on each 
			                  launch in the context of a launch configuration)</li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> API for resolving variable 
			                  values</li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> review of API and implementation</li>
	              		</ul>
            		</li>
            		<li>Usability 
	              		<ul>
			                <li><img src="/eclipse/debug/images/progress.gif"> investigate launching support from the context menu</li>
	              		</ul>
            		</li>
            		<li>Launch Tab Framework 
              			<ul>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Improve efficiency of 
			                  launch dialog/tab interaction by adding more lifecycle methods 
			                  to ILaunchConfigurationTab. The new methods will inform a tab 
			                  when it is entered/exited, rather than calling initializeFrom/apply 
			                  on the tab, which can be expensive calls. This provides the 
			                  tab with explicit enter/exit information, allowing the tab to 
			                  decide what action to take rather than enforcing it to update 
			                  and reinitialize.</li>
              			</ul>
            		</li>
          		</ul>
          		</li>
        		<li>Scalability Issues 
      			<ul>
        			<li>Debug Contexts 
          				<ul>
			                <li><img src="/eclipse/debug/images/progress.gif"> investigate the use of <i>debug contexts</i> 
			                  to dynamically filter the available set of views and actions 
			                  in the debug perspective</li>
			                <li><img src="/eclipse/debug/images/progress.gif"> investigate the use of <i>roles</i> 
			                  to statically filter the set of available views and actions 
			                  in the debugger</li>
          				</ul>
        			</li>
	            	<li>Launch Configurations 
	              		<ul>
			                <li><img src="/eclipse/debug/images/progress.gif"> investigate ways to deal with the 
			                  large number of launch configuration types, launch configurations, 
			                  and launch shortcuts</li>
	              		</ul>
	            	</li>
	            	<li>Retargettable Actions 
	              		<ul>
			                <li>create a set of actions in the debug platform that can be 
			                  shared by other debuggers - add/remove breakpoint, run to line, 
			                  etc. </li>
	              		</ul>
	            	</li>
	            	<li>Source Lookup 
	              		<ul>
			                <li><img src="/eclipse/debug/images/progress.gif"> investigate needs for other debuggers 
			                  to map to more than one source location for a stack frame</li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> investigate support 
			                  for graphical debuggers - enhancements via new IDebugEditorPresentation</li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> investigate issues for 
			                  improved source presentation (colors, highlighting, etc.), when 
			                  debugging - via IDebugEditorPresentation</li>
			                <li><img src="/eclipse/debug/images/progress.gif"> investigate the integration of &quot;source 
			                  locations&quot; into the debug platform (currently implemented 
			                  in JDT)</li>
	              		</ul>
	            	</li>
	            	<li>Debug Events 
	              		<ul>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> allow for an extensible 
			                  set of debug events - i.e. application specific debug events</li>
	              		</ul>
	            	</li>
	            	<li>Watch Items 
	              		<ul>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> define generic watch 
			                  items in the debug platform and a set of actions for creating 
			                  watch items</li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> provide an extension 
			                  point for debug models to register a watch item delegate for 
			                  a debug model (for value computation)</li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> provide persistence 
			                  of watch items in the debug platform</li>
	              		</ul>
	            	</li>
      			</ul>
        		</li>
        		<li>Debug Views 
      			<ul>
        			<li>Variables View 
	          			<ul>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> migrate details area 
			                  split setting (horizontal/vertical) to view menu</li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> enhance variable expansion 
			                  memory on iterative suspends</li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> support custom content 
			                  providers per debug model, to support &quot;logical view of 
			                  Java objects&quot;</li>
			                <li>investigate support for snapshot and compare facility</li>
	          			</ul>
            		</li>
            		<li>Console View 
              			<ul>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10>console consolidation 
			                  - provide an API that allows other clients to use the console 
			                  for message logging - without using the process model (standard 
			                  in/out/err streams)</li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> investigate a tabbed 
			                  console - i.e. a tab per process/client using the console</li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> create a new plug-in 
			                  providing extensible console support</li>
			                <li>investigate support for DBCS output (support for file encodings)</li>
			                <li>investigate support for regular expression matching in the 
			                  console for hyperlinks and coloring</li>
              			</ul>
            		</li>
          		</ul>
        		</li>
        		<li>Concurrency 
          		<ul>
            		<li>Views 
              			<ul>
			                <li><img src="/eclipse/debug/images/progress.gif"> using concurrency support from the 
			                  workbench, update debug view content (model) in non UI threads</li>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> retrieve labels and 
			                  icons for debug model elements in non-UI thread (workbench support)</li>
			                <li>improve handling of transient debug model state - i.e. resilience 
			                  to state changes in the debug model</li>
              			</ul>
            		</li>
            		<li>Launching 
              			<ul>
			                <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> launch in background 
			                  (i.e. remove modal progress)</li>
              			</ul>
            		</li>
          		</ul>
        		</li>
      		</ul>
      		<h4>Canceled Items</h4>
      		<ul>
        		<li> Watch Items 
          			<ul>
			            <li>Provide an extension point for contributing a model specific UI 
			              for editing/creating watch items. Since watch items have a &quot;deferred&quot; 
			              nature, there is no easy way to tell what the &quot;target&quot; 
			              debugger is for a watch item, and which UI to use for editing a 
			              watch item. This would require separate actions to create watch 
			              items, which is undesirable.</li>
          			</ul>
        		</li>
      		</ul>
		</div>
		<div class="homeitem3col">
			<h3>3.0 Development Effort - Milestone 9 (Friday, May 7th)</h3>
			<ul>
    			<li>Scalability Issues
  				<ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Experiment with contexts 
		              to dynamically reveal activities related to debugging. This allows 
		              language specific debug actions/views to be displayed when relevant. 
		              We have a solution for views and we are now working on action filtering. 
		              [<i>Jared Burns</i>]</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> Enhance support for Run/Debug actions 
		              in the context menu. Initial support is in place. We are investigating 
		              the use case of multi-selection launching, and migrating other launch 
		              shortcuts to use the new infrastructure. [<i>Chris Tilt</i>]</li>
  				</ul>
  				</li>
    			<li>Concurrency
  				<ul>
		            <li>[deferred background content, have background labels] Background 
		              content provider for Debug and Variables Views</li>
  				</ul>
    			</li>
	        	<li>Source Lookup [<i>Darin Wright</i>] 
	          		<ul>
			            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Code review generic source 
			              lookup contribution and migrate Java debugger to use new support.</li>
	          		</ul>
	        	</li>
	        	<li>Launching 
	          		<ul>
			            <li><img src="/eclipse/debug/images/progress.gif"> Enhance support to build before launch 
			              and detect compilation errors before launching, for contributed 
			              launch delegates.</li>
	          		</ul>
	        	</li>
	        	<li>API Cleanup 
	          		<ul>
			            <li><img src="/eclipse/debug/images/progress.gif"> Move new internal API to public API</li>
			            <li><img src="/eclipse/debug/images/progress.gif"> Clean up TODO's</li>
	          		</ul>
	        	</li>
    			<li>Bug Fixing
    			</li>
  			</ul>
		</div>
		<div class="homeitem3col">
			<h3>History - Milestone 8 (Friday, March 26th)</h3>
			<ul>
		        <li>Scalability Issues 
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> Experiment with contexts to dynamically 
		              reveal activities related to debugging. This allows language specific 
		              debug actions/views to be displayed when relevant. We have a solution 
		              for views and we are now working on action filtering. [<i>Jared 
		              Burns</i>]</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> Enhance support for Run/Debug actions 
		              in the context menu. Initial support is in place. We are investigating 
		              the use case of multi-selection launching, and migrating other launch 
		              shortcuts to use the new infrastructure. [<i>Chris Tilt</i>]</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Investigate support for 
		              retargettable breakpoint actions.</li>
		          </ul>
		        </li>
		        <li>Concurrency 
		          <ul>
		            <li>Background content provider for Debug and Variables Views</li>
		          </ul>
		        </li>
		        <li>Source Lookup [<i>Darin Wright</i>] 
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> Code review generic source lookup contribution 
		              and migrate Java debugger to use new support.</li>
		          </ul>
		        </li>
		        <li>Variables 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Enhance new <font face="Courier New, Courier, mono"><code>IIndexedValue</code></font> 
		              support to allow models to specify 0 or 1 based offsets. As well, 
		              the variables view should recursively partition indexed values (rather 
		              than only partition the first level). [<i>Darin Wright</i>]</li>
		          </ul>
		        </li>
		        <li>Launching 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Allow launch delegates to 
		              reuse an existing launch. Currently, the launching framework forces 
		              clients to use a new launch object on each launch invocation. However, 
		              some clients would like to reuse an existing launch - for example, 
		              when connecting to an already running server.</li>
		          </ul>
		        </li>
		        <li>API Cleanup 
		          <ul>
		            <li>Move new internal API to public API</li>
		            <li>Clean up TODO's</li>
		          </ul>
		        </li>
		        <li>Bug Fixing</li>
		      </ul>
		</div>
		<div class="homeitem3col">
			<h3>History - Milestone 7 (Friday, February 13th)</h3>
			<ul>
		        <li>Scalability Issues 
		          <ul>
		            <li>Experiment with contexts to dynamically enable activities related 
		              to debugging. This allows language specific debug actions/views 
		              to be displayed when relevant.[ongoing, Jared Burns]</li>
		            <li>Investigate support for Run/Debug actions in the context menu 
		              [10 days, Chris Tilt]</li>
		            <li>Investigate support for retargettable breakpoint actions [ongoing, 
		              Darin Wright]</li>
		          </ul>
		        </li>
		        <li>Concurrency [5 days, Jared Burns/Chris Tilt] 
		          <ul>
		            <li>Background content provider for Debug and Variables Views [<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=44724">Bug 
		              44724</a>]</li>
		            <li>Extend background labels to Variables View (currently supported 
		              in Debug View) [<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=46363">Bug 
		              46363</a>]</li>
		          </ul>
		        </li>
		        <li>Source Lookup [3 days, Darin Wright] 
		          <ul>
		            <li>Integrate generic source lookup facilities contribution</li>
		          </ul>
		        </li>
		        <li>Generic Console [5 days, Kevin Barnes] 
		          <ul>
		            <li>Support buffered output (i.e. process output in the background)</li>
		            <li>Support maximum buffer size (i.e. bounded memory usage)</li>
		          </ul>
		        </li>
		        <li>Bug Fixing</li>
		      </ul>
		</div>
		<div class="homeitem3col">
			<h3>History - Milestone 6 (Friday, December 19)</h3>
			<ul>
		        <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Migrate to Equniox (OSGi) 
		          Runtime  </li>
		        <li>Bug Fixing
		        <ul>
		        	<li><img src="/eclipse/debug/images/progress.gif"> Reduce the bug backlog</li>
		        </ul>
		        </li>
		        <li>Leak Analysis
					<ul>
						<li>Look for memory leaks</li>
					</ul>
				</li>
		        <li>Concurrency
		        <ul>
		          <li>Background content providers - investigate a generic background 
		            content provider for debug views. This allows debug views to be populated 
		            in background jobs to avoid blocking the UI thread while communicating 
		            with debug targets over connections with unknown latencies. [<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=44724">Bug 
		            44724</a>]</li>
		          <li>Background label computation - extend the debug view's background 
		            label provider to a generic background label provider for all debug 
		            views. This allows label computation to be performed in a background 
		            job to avoid blocking the UI thread. [<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=46363">Bug 
		            46363</a>]</li>
		        </ul>
		        </li>
		        <li> Source Lookup
		        <ul>
		        	<li><img src="/eclipse/debug/images/progress.gif"> Review Source Lookup Contribution [<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=29890">Bug 29890</a>]</li>
		        </ul>
		        </li>
		      </ul>
		</div>
		<div class="homeitem3col">
			<h3>History - Milestone 5 (Friday, November 21st)</h3>
			<ul>
		        <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Remove Dependency on Xerces 
		          plug-in</li>
		        <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Variable Support (String 
		          Substitution) 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Create new plug-in 
		              (<code>org.eclipse.core.variables</code>) to support generic string 
		              substitution, and migrate debug plug-ins to use the new plug-in.</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Identify areas in 
		              existing launch configurations where variables should be supported</li>
		          </ul>
		        </li>
		        <li>Concurrency
		        <ul>
		          <li>Background content providers - investigate a generic background 
		            content provider for debug views. This allows debug views to be populated 
		            in background jobs to avoid blocking the UI thread while communicating 
		            with debug targets over connections with unknown latencies. [<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=44724">Bug 
		            44724</a>]</li>
		          <li>Background label computation - extend the debug view's background 
		            label provider to a generic background label provider for all debug 
		            views. This allows label computation to be performed in a background 
		            job to avoid blocking the UI thread. [<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=46363">Bug 
		            46363</a>]</li>
		          <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Background launching - enhance 
		            background launching support to wait for workspace builds to complete 
		            before launching [<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=44479">Bug 
		            44479</a>]</li>
		        </ul>
		        </li>
		        <li>Logical Variable Structure 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Finalize API and 
		              implementation</li>
		          </ul>
		        </li>
		        <ul>
		          <li>New art work for toggle button in variable &amp; expression view</li>
		        </ul>
		        <li>Source Lookup [<a href="source_lookup.php">Proposal</a>] 
		          <ul>
		            <li>Investigate the integration of &quot;source locations&quot; into 
		              the debug platform. Determine if we can allow other debuggers to 
		              reuse a common set of source locations, dialogs, and launch config 
		              tabs to configure source lookup.</li>
		          </ul>
		        </li>
		        <li>Scalability 
		          <ul>
		            <li>Use role support provided by the platform to restrict the set 
		              of visible views, actions, and launch configuration types</li>
		          </ul>
		        </li>
		        <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Launch Tab Framework 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Improve efficiency 
		              of launch dialog/tab interaction by adding more lifecycle methods 
		              to ILaunchConfigurationTab. The new methods will inform a tab when 
		              it is entered/exited, rather than calling initializeFrom/apply on 
		              the tab, which can be expensive calls. This provides the tab with 
		              explicit enter/exit information, allowing the tab to decide what 
		              action to take rather than enforcing it to update and reinitialize.</li>
		          </ul>
		        </li>
		      </ul>
		</div>
		<div class="homeitem3col">
			<h3>History - Milestone 4 (Friday, October 10th)</h3>
			<ul>
		        <li>Generic Console [Darin S] [10 days] (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=37263">bug 
		          37263</a>) 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Create a new plug-in providing 
		              extensible console support (org.eclipse.ui.console) via a page book 
		              view of consoles</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Migrate the debugger to 
		              use the new plug-in, and contribute a &quot;process&quot; console 
		              that displays output from the standard I/O streams</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Provide an implementation 
		              of a simple console that messages can be logged to</li>
		          </ul>
		        </li>
		        <li>Launch Variable Review [Darin W] [8 days] 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Review and cleanup the launch 
		              variable API and implementation</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Support for recursive variable 
		              resolution</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Improve UI for variable 
		              selection</li>
		            <li><i>[Deferred]</i> Identify areas where variables should be supported</li>
		          </ul>
		        </li>
		        <li>Concurrency [Luc B] [10 days] (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=16036">bug 
		          16036</a>) 
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> Investigate use of jobs for updating 
		              Debug view - determine whether support should exist in the debug 
		              platform &quot;delegating&quot; model presentation, or in model 
		              specific (contributed) presentations. Labels for debug elements 
		              should be retrieved in a background thread and then be updated as 
		              they are computed.</li>
		          </ul>
		        </li>
		        <li>Object Browsers [Darin W] [7 days] 
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> Review API and implementation</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> Suggest new terminology/art work</li>
		          </ul>
		        </li>
		        <li>Source Lookup [Darin W] [7 days] [<a href="source_lookup.php">Proposal</a>] 
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> Investigate the integration of &quot;source 
		              locations&quot; into the debug platform. Determine if we can allow 
		              other debuggers to reuse a common set of source locations, dialogs, 
		              and launch config tabs to configure source lookup.</li>
		          </ul>
		        </li>
		        <li>Scalability [Jared B] [10 days] (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=36495">bug 
		          36495</a>) 
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> Investigate the use of contexts (provided 
		              by the workbench) to filter the set of available actions and views 
		              in the debugger that that should only be available at debug time. 
		              For example, the Display view should only become visible when doing 
		              Java debugging, and there is a valid context for performing an evaluation. 
		              The use of contexts should allow us to get rid of the existing 'Debug 
		              action groups' extension point. To provide a stable user interface, 
		              contexts should be used to introduce new actions and views to the 
		              appropriate menus and pages - we do not intend to remove actions 
		              or views once they have been added.</li>
		          </ul>
		        </li>
		        <li>Environment Variables [Jared B] [5 days] (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=40863">bug 
		          40863</a>) 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Investigate support to append 
		              to existing environment variables, rather than having to specify 
		              a complete set of environment variables. This will require platform 
		              specific code to retrieve existing environment variables. The user 
		              should be able to specify if they want to append to an existing 
		              environment or completely override an environment.</li>
		          </ul>
		        </li>
		      </ul>
		</div>
		<div class="homeitem3col">
			<h3>History - Milestone 3 (Friday, August 29th)</h3>
			<ul>
		        <li>Generic Console [2 person weeks] [Darin W] - <b>In progress, 
		          more work in M4</b> 
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> We envison a page book view of consoles. 
		              The debug platform will provide an implementation of a &quot;process 
		              console&quot; (i.e. a console that reads/writes I/O to/from a system 
		              process), and a simple message logging console.</li>
		            <li><img src="/eclipse/debug/images/progress.gif"> This work item is in progress, in milestone 
		              4, we intend to seperate the console support into a new plug-in 
		              such that console users do not need to prereq the debug plug-in.</li>
		          </ul>
		        </li>
		        <li>Launch Variable Review [2 person weeks] [Darin W, Jared B] 
		          - <b>Deferred to M4</b> 
		          <ul>
		            <li><img src="/eclipse/debug/images/progress.gif"> Review and cleanup the launch variable 
		              API and implementation</li>
		            <li>Support for recursive variable resolution</li>
		            <li>Improve UI for variable selection</li>
		            <li>Identifiy areas where variables should be supported</li>
		          </ul>
		        </li>
		        <li>Concurrency [1 person day] [Jared B] 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Launch in the background 
		              - avoid modal progress when launching</li>
		          </ul>
		        </li>
		        <li>Object Browsers [1 person week] [Darin W] - <b>Deferred to 
		          M4</b> 
		          <ul>
		            <li>Review API and implementation</li>
		            <li>Suggest new terminology/art work</li>
		          </ul>
		        </li>
		        <li>Watch Items [2 person weeks] [Jared B] 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Define a common set of actions 
		              for creating/editing watch items</li>
		            <li>Provide an extension point for contributing a model specific UI 
		              for watch item creation/editing - <b>Deferred to M4</b></li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Provide an extension point 
		              for contributing a watch item delegate for a debug model (to compute 
		              a watch item value)</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> Provide persistence of watch 
		              items in the debug platform</li>
		          </ul>
		        </li>
		      </ul>
		</div>
		<div class="homeitem3col">
			<h3>History - Milestone 2 (Friday, July 18th)</h3>
			<ul>
		        <li>Generic Console [4 person weeks] 
		          <ul>
		            <li><i>[Deferred to M3]</i> We envison a tabbed view of consoles driven 
		              by &quot;console inputs&quot; (similar to the editor pane/editor 
		              input model). The debug platform will provide an implementation 
		              of a &quot;process console&quot; (i.e. a console that reads/writes 
		              I/O to/from a system process).</li>
		          </ul>
		        </li>
		        <li>Launch Variable Review [1 person weeks] 
		          <ul>
		            <li><i>[Deferred to M3]</i> Review and cleanup the launch variable 
		              API and implementation</li>
		          </ul>
		        </li>
		      </ul>
		</div>
		<div class="homeitem3col">
			<h3>History - Milestone 1</h3>
			<ul>
		        <li>Extensible Launch Modes [Darin W]  
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> run, debug, ...</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> add &quot;profile&quot; 
		              mode to the debug platform</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> allow launch configuration 
		              tab groups to specify a set of tabs per launch mode</li>
		          </ul>
		        </li>
		        <li>Environment Variables [Jared B] 
		          <ul>
		            <li><i>[Deferred]</i> support for setting environment variables per 
		              launch configuration</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> launch tab for specifying 
		              environment settings</li>
		          </ul>
		        </li>
		        <li>Launch Variables [Jared B] <i>[this work has continued as / 
		          been replaced by String Substitution Support]</i> 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> user defined variables that 
		              can be referenced in launch configuraitons - such as <i>${some_variable}</i></li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> extension point for variable 
		              definition supporting a default value, optional initializer (delegate), 
		              and optional resolver (allows resolution on each launch in the context 
		              of a launch configuration)</li>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> API for resolving variable 
		              values</li>
		          </ul>
		        </li>
		        <li>Variables View [Joe S] 
		          <ul>
		            <li><img src="/eclipse/debug/images/ok.gif" height=10 width=10> migrate details area split 
		              setting (horizontal/vertical) to view menu</li>
		            <li><i>[More work in M4, M5]</i> support for custom/extensible details 
		              area based on selected variable</li>
		          </ul>
		        </li>
		      </ul>
		</div>
		<div class="homeitem3col">
			<h3>Bug Resolution</h3>
			<ul>
		        <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=Debug&target_milestone=2.1.1&target_milestone=3.0&target_milestone=3.0+M1&target_milestone=3.0+M2&target_milestone=3.0+M3&target_milestone=3.0+M4&target_milestone=3.0+M5&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=VERIFIED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=2.0.1+Fixed%27n+Verified&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Fixes 
		          released in 3.0</a></li>
		    </ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="/eclipse/debug/about.php">About this content</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>