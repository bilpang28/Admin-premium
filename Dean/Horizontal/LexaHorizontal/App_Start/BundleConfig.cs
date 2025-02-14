﻿using System.Web;
using System.Web.Optimization;

namespace Lexa
{
    public class BundleConfig
    {
        // For more information on bundling, visit https://go.microsoft.com/fwlink/?LinkId=301862
        public static void RegisterBundles(BundleCollection bundles)
        {
            bundles.Add(new ScriptBundle("~/bundles/jquery").Include(
                        "~/Scripts/jquery.min.js",
                        "~/Scripts/bootstrap.bundle.min.js",
                        "~/Scripts/jquery.slimscroll.js",
                        "~/Scripts/waves.min.js",
                        "~/plugins/jquery-sparkline/jquery.sparkline.min.js"));

            bundles.Add(new ScriptBundle("~/bundles/jqueryval").Include(
                        "~/Scripts/jquery.validate*"));

            bundles.Add(new StyleBundle("~/Content/css").Include(
                      "~/Content/bootstrap.min.css",
                      "~/Content/icons.css",
                      "~/Content/style.css"));
        }
    }
}
