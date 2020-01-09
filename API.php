/****** Script for SelectTopNRows command from SSMS  ******/

 /****** Script for SelectTopNRows command from SSMS  ******/
SELECT [affiliate].[AffiliateNodes].Name as username, Affiliate.Affiliates.Name FROM [affiliate].[AffiliateNodes]

join affiliate.Affiliates as Affi ON Affi.ID = [affiliate].[AffiliateNodes].AffiliateID
 WHERE [affiliate].[AffiliateNodes].Name LIKE '%travo_qa%'  OR [affiliate].[AffiliateNodes].Name LIKE '%trav_qa%'

--JOIN affiliate.Accounts as Accounts ON Accounts.SupplierID = Suppliers.ID
--JOIN affiliate.Affiliates as Affiliates ON Affiliates.ID = Accounts.AffiliateID