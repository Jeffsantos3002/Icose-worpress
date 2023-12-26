import Title from "@/components/Title";
import Body from "@/components/Body";
import Transparency from "@/components/About/Transparency";
import FiscalCouncilList from "../components/About/FiscalCouncil";
import AdministratorsList from "../components/About/Administrators";


function About() {
  return (
    <div className="bg-background-section pt-[92px]">
      <Body>
        <section className="flex flex-col gap-16">
          <Transparency/>
          <div className="flex flex-col gap-10">
            <Title
              content="Membros do Conselho Administrativo"
            />
            <div className="space-y-4">
              <AdministratorsList/>
            </div>                   
          </div>

          <div className="flex flex-col gap-10">
            <div className="flex flex-col gap-10">
              <Title
                color="#365314"
                content="Membros do Conselho Fiscal"
              />  
              <div className="space-y-4">
                <FiscalCouncilList/>
              </div>
            </div>
          </div>  
        </section>
        <section>
        </section>
      </Body>
    </div>
  );
};

export default About;

