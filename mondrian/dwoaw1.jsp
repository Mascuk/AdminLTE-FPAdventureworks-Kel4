<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>

<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
    jdbcUrl="jdbc:mysql://localhost/adventureworks2?user=root&password=" catalogUri="/WEB-INF/queries/dwoaw1.xml">

    select {[Measures].[SubTotal], [Measures].[LineTotal], [Measures].[OrderQty]} ON COLUMNS,
    {([Time],[Customer],[Employee],[Product])} ON ROWS
    from [Sales]

</jp:mondrianQuery>

<c:set var="title01" scope="session">Query AdventureWorks using Mondrian OLAP</c:set>
