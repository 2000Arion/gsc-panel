import React, { forwardRef } from "react";
import { Form } from "formik";
import styled from "styled-components/macro";
import { breakpoint } from "@/theme";
import FlashMessageRender from "@/components/FlashMessageRender";
import tw from "twin.macro";

type Props = React.DetailedHTMLProps<
  React.FormHTMLAttributes<HTMLFormElement>,
  HTMLFormElement
> & {
  title?: string;
};

const Container = styled.div`
  ${breakpoint("sm")`
        ${tw`w-4/5 mx-auto`}
    `};

  ${breakpoint("md")`
        ${tw`p-10`}
    `};

  ${breakpoint("lg")`
        ${tw`w-3/5`}
    `};

  ${breakpoint("xl")`
        ${tw`w-full`}
        max-width: 700px;
    `};
`;

export default forwardRef<HTMLFormElement, Props>(
  ({ title, ...props }, ref) => (
    <Container>
      {title && (
        <h2 css={tw`text-3xl text-center text-neutral-100 font-medium py-4`}>
          {title}
        </h2>
      )}
      <FlashMessageRender css={tw`mb-2 px-1`} />
      <Form {...props} ref={ref}>
        <div
          css={tw`md:flex w-full bg-white shadow-lg rounded-lg p-6 md:pl-0 mx-1`}
        >
          <div css={tw`flex-none select-none mb-6 md:mb-0 self-center`}>
            <img
              src={"/assets/svgs/pterodactyl.svg"}
              css={tw`block w-48 md:w-64 mx-auto`}
            />
          </div>
          <div css={tw`flex-1`}>{props.children}</div>
        </div>
      </Form>
      <div
        css={tw`flex items-center justify-center text-[#606d7b] xs:hidden mt-4`}
      >
        <a
          rel={"noopener nofollow noreferrer"}
          href={"https://www.arion2000.xyz"}
          target={"_blank"}
          css={tw`transition-opacity duration-300 ease-in-out`}
        >
          <img
            src={"https://img.arion2000.xyz/r/a2data_logo_white_large.png"}
            alt={"a2data logo"}
            css={tw`h-8 opacity-40 hover:opacity-100 grayscale transition-all duration-300 ease-in-out hover:grayscale-0`}
          />
        </a>
        <span css={tw`ml-2`}>&copy; {new Date().getFullYear()}</span>
      </div>
    </Container>
  )
);
