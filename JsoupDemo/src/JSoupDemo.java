import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

import javax.xml.transform.dom.DOMSource;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;

public class JSoupDemo {
    public static void main(String[] args) throws IOException {
        String url = "http://rss.cnn.com/rss/edition.rss";
        Document document = Jsoup.connect(url).get();
        BufferedWriter writer = null;
        try
        {
            writer = new BufferedWriter( new FileWriter("src//a.rss"));
            writer.write(document.toString());

        }
        catch ( IOException e) {
            System.out.println(e);
        }


        File input = new File("src//a.rss");
        Document doc = Jsoup.parse(input, "UTF-8", url);

        Elements images = doc.getElementsByTag("media:group");
        System.out.println("Jpg Image list");
        Elements jpg_images = images.select("[url$=.jpg]");
        for (Element image : jpg_images){
            System.out.println(image);
        }

    }
}
